<?php

namespace App\Http\Livewire;

use App\Models\User;
use Exception;
use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\LoggableModel;

class AccountsList extends Component
{
    public $search = '';
    public $perPage = 10;
    public $column_search = ['name','username','email','sex','is_active'];
    public $sortColumn = '';
    public $page;
    public $sortDirection = 'asc';
    public $name;
    public $is_active;
    public $username;
    public $email;
    public $user;
    public $sex;
    protected $listeners = ['search', 'showEditModal'];

    public function render()
    {
        $keyword = trim($this->search);
        array_push($this->column_search, 'id');
        $results = User::query()
        ->select($this->column_search);


        foreach ($this->column_search as $column) {
            $results->orWhere($column, 'LIKE', "%{$keyword}%");
        }

        if ($this->sortColumn && in_array($this->sortColumn, $this->column_search)) {
            $results->orderBy($this->sortColumn, $this->sortDirection);
        }

        $results = $results->paginate($this->perPage);
        if ($this->page > 1 && $results->isEmpty()) {
            $this->resetPage();
            $this->render();
        }

        return view('livewire.accounts-list')->with(compact('results'));
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
            $this->user = User::findOrFail($id);
            $user = $this->user;
            $this->name = $user->name;
            $this->username = $user->username;
            $this->email = $user->email;
            $this->sex = $user->sex;
            $this->is_active = $user->is_active;            
            return response()->json(['success' => true]);
        } catch (Exception $e) {

        }
    }

    public function update()
    {
        $validatedData = Validator::make([
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'sex' => $this->sex,
            'is_active' => $this->is_active, 
        ], [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'sex' => 'required|in:male,female,other',
            'is_active' => 'required|in:0,1',
        ]);
    

        if ($validatedData->fails()) {
            // Xử lý lỗi tùy ý và trả về thông báo lỗi nếu cần.
            $errors = $validatedData->errors();
            $errorMessages = $errors->all();
            $errorString = implode('<br>', $errorMessages);
            $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => $errorString, 'title' => '']);

        }else{

            try {
                $this->user->update($validatedData->validated());
                // $successMessage = __('messages.update_success'); // Sử dụng thông điệp từ tệp ngôn ngữ
                $this->dispatchBrowserEvent('alert', ['type' => 'success', 'message' => $successMessage, 'title' => '']);
                $this->dispatchBrowserEvent('modalClosed');
            } catch (\Exception $e) {
                $errorMessage = __('messages.update_error'); 
                $this->dispatchBrowserEvent('alert', ['type' => 'error', 'message' => $errorMessage, 'title' => __('messages.error')]);
                LoggableModel::logCustomError($e->getMessage(), get_class($this).'['.__FUNCTION__.']');

            }    
        }
    }
}
