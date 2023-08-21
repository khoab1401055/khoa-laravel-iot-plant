<?php

namespace App\Http\Livewire;

use App\Models\Translations;
use Exception;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class Language extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['search', 'showEditModal'];

    public $search = '';
    public $column_search = ['id', 'key', 'value'];
    public $sortColumn = '';
    public $sortDirection = 'asc';
    public $perPage = 10;
    public $selectedLanguage = null;
    public $masterData;
    public $key, $value;
    public $languageCode_add = 'vi', $key_add, $value_add;

    public function render()
    {
        $keyword = trim($this->search);
        $masterDataList = Translations::query()
            ->select('key', 'value', 'id');
        if ($this->selectedLanguage) {
            $masterDataList->where('language_code', $this->selectedLanguage);
        }

        if ($keyword) {
            $masterDataList->where(function ($query) use ($keyword) {
                foreach ($this->column_search as $column) {
                    $query->orWhere($column, 'LIKE', "%{$keyword}%");
                }
            });
        }
        if ($this->sortColumn && in_array($this->sortColumn, $this->column_search)) {
            $masterDataList->orderBy($this->sortColumn, $this->sortDirection);
        }
        $masterDataList = $masterDataList->paginate($this->perPage);
        if ($this->page > 1 && $masterDataList->isEmpty()) {
            $this->resetPage();
            $this->render();
        }
        $lang_select = Translations::select('language_code')->distinct()->pluck('language_code')->toArray();
        return view('livewire.language', compact('masterDataList', 'lang_select'));
    }

    public function search($value)
    {
        $this->search = $value;

        $this->render();
    }
    public function sort($column)
    {
        if ($this->sortColumn === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortColumn = $column;
            $this->sortDirection = 'asc';
        }
    }

    public function showEditModal($id)
    {
        try {
            $this->masterData = Translations::findOrFail($id);
            $this->key = $this->masterData->key;
            $this->value = $this->masterData->value;

            return response()->json(['success' => true]);
        } catch (Exception $e) {
            // dd($e->getMessage());
        }
    }
    public function update()
    {
        $validatedData = Validator::make([
            'value' => $this->value,
            'key' => $this->key,
            // 'related_table' => $this->related_table,
            // 'related_column' => $this->related_column,
        ], [
            'value' => 'required|string',
            'key' => 'required|string',
            // 'related_table' => 'required',
            // 'related_column' => 'required',
        ]);

        if ($validatedData->fails()) {
            // Xử lý lỗi tùy ý và trả về thông báo lỗi nếu cần.
            $errors = $validatedData->errors();
            $errorMessages = $errors->all();

            $errorString = implode('<br>', $errorMessages);

            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => $errorString, 'title' => '']);
        } else {

            try {
                $this->masterData->update($validatedData->validated());
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Cập nhật thành công!', 'title' => '']);
                $this->dispatchBrowserEvent('modalClosed');
            } catch (\Exception $e) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Có lỗi xảy ra khi cập nhật!', 'title' => 'Lỗi']);
            }
        }
    }
    private function resetInputs()
    {
        $this->languageCode_add = '';
        $this->value_add_en = '';
        $this->value_add_vi = '';
        $this->key_add = '';
    }
    public $value_add_vi;
    public $value_add_en;

    public function store()
    {
        $validatedData = Validator::make([
            'key_add' => $this->key_add,
            'value_add_vi' => $this->value_add_vi,
             'value_add_en' => $this->value_add_en,
            // 'related_column' => $this->related_column,
        ], [
            'key_add' => [
                'required',
                Rule::unique('translations', 'key')->ignore(null, 'id'), // Change 'id' to the actual ID if updating
            ],
            'value_add_vi' => 'required',
            'value_add_en' => 'required',
        ]);


        if ($validatedData->fails()) {
            // Xử lý lỗi tùy ý và trả về thông báo lỗi nếu cần.
            $errors = $validatedData->errors();
            $errorMessages = $errors->all();

            $errorString = implode('<br>', $errorMessages);

            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => $errorString, 'title' => '']);
        } else {
            try {
                Translations::create([
                    'language_code' => 'vi',
                    'key' => $this->key_add,
                    'value' => $this->value_add_vi,
                ]);

                Translations::create([
                    'language_code' => 'en',
                    'key' => $this->key_add,
                    'value' => $this->value_add_en,
                ]);

                $this->resetInputs();
                $this->dispatchBrowserEvent('modalClosed');

                $this->dispatchBrowserEvent('alert', [
                    'type' => 'success',
                    'message' => 'Thêm dữ liệu thành công!',
                    'title' => ''
                ]);
            } catch (\Exception $e) {
                $this->dispatchBrowserEvent('alert', [
                    'type' => 'error',
                    'message' => 'Có lỗi xảy ra khi thêm dữ liệu!',
                    'title' => 'Lỗi'
                ]);
            }
        }
    }
}
