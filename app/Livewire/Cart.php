<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Shopingcart;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{


    public $carts;

    public function mount(){
        $this->carts = Shopingcart::where('user_id',Auth::id())->get();
    }
    public function deleteCart($id)
    {
        Shopingcart::find($id)->delete();
        return redirect()->back()->with('delete',"Product Successfully Deleted");

    }
    public function totalAmount(){
        $totalAmount=0;
        foreach($this->carts as $cart){
            $totalAmount +=$cart->product->product_price*$cart->total_quantity;
        }
        return $totalAmount;
    }

    public function render()
    {
        return view('livewire.cart');

    }
}
