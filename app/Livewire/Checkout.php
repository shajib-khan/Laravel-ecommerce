<?php

namespace App\Livewire;

use app\Models\Product;
use Livewire\Component;
use App\Models\OrderProduct;
use Illuminate\Support\Facades\Auth;

class Checkout extends Component
{


    public $firstName;
    public $email;
    public $address;
   
    public $order_id=1;


    public function placeOrder(){
        OrderProduct::create([
            'first_name'=>$this->firstName,
            'email'=>$this->email,
            'address'=>$this->address,
            'order_id'=>$this->order_id,

            'user_id' => Auth::user()->id,
        ]);
        return redirect('/checkout')->back()->with('order',"order Successfully placed");
    }
    public function render(){

        return view('livewire.checkout');
    }
}
