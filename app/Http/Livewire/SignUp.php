<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SignUp extends Component
{
    public $name;
    public $first_name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required',
        'first_name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed|min:8',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function newUser()
    {
        $validatedData = $this->validate();
    }

    public function render()
    {
        return view('livewire.sign-up');
    }
}
