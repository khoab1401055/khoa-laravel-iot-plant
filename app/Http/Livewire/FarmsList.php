<?php

namespace App\Http\Livewire;

use App\Models\Farms;
use Livewire\Component;

class FarmsList extends Component
{

    public $farms;

    public function mount()
    {
        // Logic thực hiện khi component được tạo
        $this->farms = Farms::get();
    }


    public function render()
    {
        return view('livewire.farms-list',[
            'farms' => $this->farms,
        ]);
    }
}
