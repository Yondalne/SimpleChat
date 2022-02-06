<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Sign extends Component
{

    public $route = "/";

    protected $listeners = ["changeRoute"];

    public function changeRoute($data)
    {
        if($data != "/" and $data != "/signup"){
            $this->emitUp("unknownRoute");
        }else {
            $this->route = $data;
        }
    }

    public function render()
    {
        return view('livewire.sign');
    }
}
