<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;

class Body extends Component
{
    
    public function render()
    {
        return view('livewire.body',
    [
        'products'=>Product::simplePaginate(5),
    ]);
    }
}
