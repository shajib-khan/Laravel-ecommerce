<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;
use App\Models\Shopingcart;

class SingleProduct extends Component
{
    public $product;

    public $quantity = 1;

    public function mount($id) {
        $this->product = Product::find($id);
    }

    public function render()
    {
        return view('livewire.single-product');
    }

    public function addToCart() {
        Shopingcart::create([
            'total_price' => 0,
            'total_quantity' => $this->quantity,
            'product_id' => $this->product->id,
            'user_id' => auth()->id(),
        ]);
    }
}
