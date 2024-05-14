<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\OrderProduct;
use App\Models\Shopingcart;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
class Checkout extends Component
{
    public $firstName,$totalProductAmount=0, $carts, $shopingcart, $cart,$email,$address,$order_id=1,$product,$order;

    public function orderProducts(){
      $order = Order::create([
        'user_id'=>auth()->user()->id,
        'first_name'=>$this->firstName,
        'email'=>$this->email,
        'address'=>$this->address,
        ]);

        foreach( $this->shopingcart as $cart){
             OrderProduct::create([
                'order_id'=>$order->id,
                'product_id'=>$this->$cart->product_id,
                'total_quantity'=>$this->$cart->total_quantity,
                'total_amount'=>$this->totalProductAmount,
        ]);
        }
    }
        public function placeOrder(){
            $placeOrder = $this->orderProducts();
        }


    public function render(){

        return view('livewire.checkout');
    }
}
