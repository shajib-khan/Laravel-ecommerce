<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;

class SingleProduct extends Component
{



    public function render()
    {
        return view('livewire.single-product',
    [
        'products'=>Product::all()
    ]);
}
}
