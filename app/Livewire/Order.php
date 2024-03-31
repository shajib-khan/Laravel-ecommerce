<?php

namespace App\Livewire;
use livewire\Attributes\Layout;
use Livewire\Component;

class Order extends Component
{
    public function render()
    {
        return view('livewire.order')
        ->layout('layouts.admin');
    }
}
