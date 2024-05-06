<?php

namespace App\Livewire;
use App\Models\OrderProduct;
use Livewire\Component;

class Checkout extends Component
{


    public $firstName;
    public $email;
    public $address;
    public $product_id;
    public $user_id;
    public function placeOrder(){
        OrderProduct::create([
            'product_id' => $this->product->id,
            'user_id' => auth()->id(),
            'first_name'=>$this->firstName,
            'email'=>$this->email,
            'address'=>$this->address

        ]);
        dd('hello');
        return redirect('/checkout')->back()->with('order',"order Successfully placed");
    }
    public function render()
    {
        return view('livewire.checkout');
    }
}
