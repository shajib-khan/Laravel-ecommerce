<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class EditProduct extends Component
{
    use WithFileUploads;
    public $productName;
    public $productDescription;
    public $productImage;
    public $id;


    public function mount($id)
    {
        $product = Product::find($id);
        $this->productName =$product->ProductName;
        $this->productDescription =$product->ProductDescription;
        $this->productImage = $product->ProductImage;
    }
    public function editProduct()
    {
       $this->validate([
        'productName'=>'required',
        'productDescription'=>'required',

       ]);
    }

    public function render()
    {
        return view('livewire.edit-product')
        ->layout('layouts.admin');
    }

}
