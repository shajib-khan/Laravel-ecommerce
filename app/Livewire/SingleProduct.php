<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;
use App\Models\Shopingcart;
class SingleProduct extends Component
{
    Public $product;
    public $quantity=1;


    public function addToCart() {
        Shopingcart::create([

            'total_quantity' => $this->quantity,
            'product_id' => $this->product->id,
            'user_id' => auth()->id(),
        ]);
        return redirect()->back()->with('cart',"Product Successfully Added");

    }

    public function mount($id){
        $this->product=Product::find($id);
    }


    public function render(){
        return view('livewire.single-product');
 }

}
