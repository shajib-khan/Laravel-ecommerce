<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\OrderProduct;
use App\Models\Shopingcart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
class Checkout extends Component
{
    public $firstName;
    public $totalAmount=0;
    public $carts;
    public $shopingcart;
    //public  $cart;
    public $email;
    public $address;
    public $order_id;
    public $product;
    public $order;

    public function mount(){
        $this->carts = Shopingcart::where('user_id',Auth::id())->get();
    }
    public function getTotalAmount(){
        $totalAmount = 0;

        foreach($this->carts as $cart){
            $totalAmount += $cart->product->product_price * $cart->total_quantity;
        }

        return $totalAmount;
    }

    public function placeOrder(){

      $order = Order::create([
        'user_id'=>auth()->user()->id,
        'first_name'=>$this->firstName,
        'email'=>$this->email,
        'address'=>$this->address,
        'total_amount'=>$this->totalAmount,
        ]);


        foreach( $this->carts as $cart){
             OrderProduct::create([
                'order_id'=>$order->id,
                'product_id'=>$cart->product_id,
                'total_quantity'=>$cart->total_quantity,
                'product_price'=>$cart->product_price,
        ]);
        }
    }



    public function render(){

        return view('livewire.checkout');
    }
}

