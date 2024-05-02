<?php

namespace App\Livewire;
use App\Models\Shopingcart;
use Livewire\Component;

class Cart extends Component
{
    public $total_quantity;
    public $product_id;
    public $user_id;
    public function addToCart()
    {
        Shopingcart::create([
            'total_quantity'=>$this->total_quantity,
            'product_id'=>$this->product_id,
            'user_id'=>$this->user_id,
        ]);
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
