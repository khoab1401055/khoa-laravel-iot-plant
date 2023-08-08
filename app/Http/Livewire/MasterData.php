<?php

namespace App\Http\Livewire;

use App\Models\MasterData as ModelsMasterData;
use Exception;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class MasterData extends Component
{
    use WithPagination;
    protected $listeners = ['search', 'showEditModal'];
    public $search = '';
    public $column_search = ['id', 'name', 'alias', 'related_table', 'related_column'];
    public $sortColumn = '';
    public $sortDirection = 'asc';
    public $perPage = 10;

    public $masterData;
    public $name;
    public $alias;
    public $related_table;
    public $related_column;
    public $status;

    protected $paginationTheme = 'bootstrap';
    public function mount()
    {
        $this->gotoPage(1); // Go to page 1 and fetch the data
    }
    public function showEditModal($id)
    {
        try {
            $this->masterData = ModelsMasterData::findOrFail($id);
            $this->name = $this->masterData->name;
            $this->alias = $this->masterData->alias;
            $this->related_table = $this->masterData->related_table;
            $this->related_column = $this->masterData->related_column;
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function update()
    {
        $validatedData = Validator::make([
            // 'name' => $this->name,
            'alias' => $this->alias,
            // 'related_table' => $this->related_table,
            // 'related_column' => $this->related_column,
        ], [
            // 'name' => 'required',
            'alias' => 'required',
            // 'related_table' => 'required',
            // 'related_column' => 'required',
        ]);

        if ($validatedData->fails()) {
            // Xử lý lỗi tùy ý và trả về thông báo lỗi nếu cần.
            $errors = $validatedData->errors();
            $errorMessages = $errors->all();

            $errorString = implode('<br>', $errorMessages);

            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => $errorString, 'title' => '']);

        }else{

            try {
                $this->masterData->update($validatedData->validated());
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => 'Cập nhật thành công!', 'title' => '']);
                $this->dispatchBrowserEvent('modalClosed');
            } catch (\Exception $e) {
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => 'Có lỗi xảy ra khi cập nhật!', 'title' => 'Lỗi']);
            }
        }

    }

    public function render()
    {
        $keyword = trim($this->search);

        $masterDataList = ModelsMasterData::query()
            ->select('id', 'name', 'alias', 'related_table', 'related_column');

        foreach ($this->column_search as $column) {
            $masterDataList->orWhere($column, 'LIKE', "%{$keyword}%");
        }

        if ($this->sortColumn && in_array($this->sortColumn, $this->column_search)) {
            $masterDataList->orderBy($this->sortColumn, $this->sortDirection);
        }


        $masterDataList = $masterDataList->paginate($this->perPage);
        if ($this->page > 1 && $masterDataList->isEmpty()) {
            $this->resetPage();
            $this->render();
        }

        return view('livewire.master-data', compact('masterDataList'));
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
}
