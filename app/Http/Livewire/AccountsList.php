<?php

namespace App\Http\Livewire;

use App\Models\User;
use Exception;
use Livewire\Component;

class AccountsList extends Component
{
    public $search = '';
    public $perPage = 10;
    public $column_search = ['name','username','email','sex','is_active'];
    public $sortColumn = '';
    public $page;
    public $sortDirection = 'asc';
    public $name;
    public $username;
    public $email;
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
            $user = User::findOrFail($id);
            $this->name = $user->name;
            $this->username = $user->username;
            $this->email = $user->email;
            $this->sex = $user->sex;
            return response()->json(['success' => true]);
        } catch (Exception $e) {
            dd($e->getMessage());
        }


    }
}
