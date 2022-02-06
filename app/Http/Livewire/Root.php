<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Root extends Component
{
    public $route = "/";

    protected $listeners = ["unknownRoute"];

    public function unknownRoute()
    {
        $this->route = "error";
    }
    public function render()
    {
        return view('livewire.root');
    }
}
