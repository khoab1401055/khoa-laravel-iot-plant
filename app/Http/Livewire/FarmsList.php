<?php

namespace App\Http\Livewire;

use App\Models\Farms;
use Livewire\Component;

class FarmsList extends Component
{

    public $farms;
    public $search = '';
    public $column_search = ['description', 'name_code', 'is_active'];
    protected $listeners = ['search'];
    public $sortColumn = '';
    public $sortDirection = 'asc';
    public function render()
    {
        $keyword = trim($this->search);
        $farms = Farms::query();

        if ($keyword !== null) {
            $farms->where(function ($query) use ($keyword) {
                foreach ($this->column_search as $column) {
                    $query->orWhere($column, 'like', '%' . $keyword . '%');
                }
                $query->orWhereHas('customer', function ($query) use ($keyword) {
                    $query->where('name', 'like', '%' . $keyword . '%');
                });
            });
        }
        $farms->orderBy('id','desc');
        $r_farms = $farms->get();

        return view('livewire.farms-list')->with(compact('r_farms'));
    }
    public function search($value)
    {
        $this->search = $value;

        $this->render();
    }

}
