<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;
use App\Models\Shopingcart;
class SingleProduct extends Component
{
    Public $product;
    public function mount($id)
    {
        $this->product=Product::find($id);
    }
    

    public function render()
    {
        return view('livewire.single-product');
}

}
