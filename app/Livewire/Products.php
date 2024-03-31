<?php

namespace App\Livewire;
use livewire\Attributes\Layout;
use Livewire\Component;

class Products extends Component
{
    public function render()
    {
        return view('livewire.products')
        ->layout('layouts.admin');;
    }
}
