<?php

namespace App\Livewire;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;

class EditProduct extends Component
{
    use WithFileUploads;
    public $ProductName;
    public $ProductDescription;
    public $ProductImage;
    public $id;


    public function mount($id)
    {
        $product = Product::find($id);
        $this->ProductName =$product->ProductName;
        $this->ProductDescription =$product->ProductDescription;
        $this->ProductImage = $product->ProductImage;
    }
    public function editProduct()
    {
       $this->validate([
        'ProductName'=>'required',
        'ProductDescription'=>'required',

       ]);
       $products = Product::find($this->id);
       $products->update([
        'ProductName'=>$this->ProductName,
        'ProductDescription'=>$this->ProductDescription,
        'ProductImage'=>$this->ProductImage->store('public/photos')
       ]);
       return redirect('product')->back()->with('edit',"Product Successfully Updated");
    }


    public function render()
    {
        return view('livewire.edit-product')
        ->layout('layouts.admin');
    }

}
