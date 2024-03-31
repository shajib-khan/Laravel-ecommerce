<?php

namespace App\Livewire;
use livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{

    public function render()
    {
        return view('livewire.dashboard')
        ->layout('layouts.admin');;
    }
}
