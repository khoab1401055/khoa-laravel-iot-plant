<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GotoFarm extends Component
{
    public $farm;
    public $search = '';
    protected $listeners = ['search'];

    public function render()
    {
        $results = $this->farm;
        return view('livewire.goto-farm',compact('results'));
    }
    public function search($value)
    {
        $this->search = $value;

    }
}
