<?php

namespace App\Livewire;
use livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{

    public function render()
    {
        return view('livewire.login')
        ->layout('layouts.admin');
    }
}
