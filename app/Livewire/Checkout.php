<?php

namespace App\Livewire;
use auth;
use app\Models\Product;
use Livewire\Component;
use App\Models\OrderProduct;

class Checkout extends Component
{


    public $firstName;
    public $email;
    public $address;
    public $product;
    public $order_id=1;
   

    public function placeOrder(){
        OrderProduct::create([
            'first_name'=>$this->firstName,
            'email'=>$this->email,
            'address'=>$this->address,
            'order_id'=>$this->order_id,
            'product_id' => $this->product->id,
            'user_id' => auth()->id(),
        ]);
        return redirect('/checkout')->back()->with('order',"order Successfully placed");
    }
    public function render(){

        return view('livewire.checkout');
    }
}
