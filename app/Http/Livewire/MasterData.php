<?php

namespace App\Http\Livewire;

use App\Models\MasterData as ModelsMasterData;
use Exception;
use Livewire\Component;
use Livewire\WithPagination;

class MasterData extends Component
{
    use WithPagination;
    protected $listeners = ['search','showEditModal'];
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
        try{
            $this->masterData = ModelsMasterData::findOrFail($id);
            $this->name = $this->masterData->name;
            $this->alias = $this->masterData->alias;
            $this->related_table = $this->masterData->related_table;
            $this->related_column = $this->masterData->related_column;
            $this->status = $this->masterData->status;
        }catch(Exception $e){
            dd($e->getMessage());
        }

    }
    public function update()
    {
        $this->masterData->update([
            'name' => $this->name,
            'alias' => $this->alias,
            'related_table' => $this->related_table,
            'related_column' => $this->related_column,
            'status' => $this->status,
            // Các trường khác tùy ý
        ]);

        // Sau khi cập nhật xong, ẩn modal edit
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
