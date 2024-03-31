<?php

namespace App\Livewire;
use livewire\Attributes\Layout;
use Livewire\Component;

class Categories extends Component
{
    public function render()
    {
        return view('livewire.categories')
        ->layout('layouts.admin');
    }
}
