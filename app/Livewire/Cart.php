<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Shopingcart;
use Illuminate\Support\Facades\Auth;

class Cart extends Component
{

    public $carts;
    public function mount(){
        $this->carts= Shopingcart::where('user_id',Auth::id())->get();

    }

    public function render()
    {
        return view('livewire.cart');

    }
}
