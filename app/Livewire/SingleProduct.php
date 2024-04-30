<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;
use App\Models\Shopingcart;
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
