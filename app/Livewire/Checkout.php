<?php

namespace App\Livewire;


use Livewire\Component;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;

class Checkout extends Component
{


    public $firstName;
    public $email;
    public $address;

    public $order_id=1;
    public $product;



    public function placeOrder(){
        OrderProduct::create([
            'first_name'=>$this->firstName,
            'email'=>$this->email,
            'address'=>$this->address,
           'product_id'=>$this->product->id,
           'product_price'=>$this->product->product_price,
            'order_id'=>$this->order_id,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->with('order',"order Successfully placed");
    }
    public function render(){

        return view('livewire.checkout');
    }
}
