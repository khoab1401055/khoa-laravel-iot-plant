<?php

namespace App\Http\Livewire;

use App\Models\DeviceMaster;
use Livewire\Component;

class DevicesListLivewire extends Component
{
    public $devices;
    public $search;
    protected $listeners = ['search'];
    public $column_search = ['name', 'name_alias','device_id'];

    public function mount()
    {
        // Logic thực hiện khi component được tạo
    }

    public function render()
    {
        $keyword = trim($this->search);

        $this->devices = DeviceMaster::with('devicesModules', 'devicesModules.masterData');

        if ($keyword !== null) {
            $this->devices->where(function ($query) use ($keyword) {
                foreach ($this->column_search as $column) {
                    $query->orWhere($column, 'like', '%' . $keyword . '%');
                }

            });
        }

        $this->devices->orderBy('id', 'desc');
        $this->devices  = $this->devices->get();


        return view('livewire.devices-list-livewire', [
            'devices' => $this->devices,
        ]);
    }
    public function search($value)
    {
        $this->search = $value;
        $this->render();
    }
}
