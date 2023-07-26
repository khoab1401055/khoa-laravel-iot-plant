<?php

namespace App\Http\Livewire;

use App\Models\DeviceMaster;
use Livewire\Component;

class DevicesListLivewire extends Component
{
    public $devices;

    public function mount()
    {
        // Logic thực hiện khi component được tạo
        $this->devices = DeviceMaster::all();
    }

    public function render()
    {
        return view('livewire.devices-list-livewire',[
            'devices' => $this->devices,
        ]);
    }
}
