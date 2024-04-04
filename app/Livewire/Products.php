<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category as ProductCategory;
use livewire\Attributes\Layout;
class Products extends Component
{
    use WithFileUploads;

    public $ProductName;
    public $ProductDescription;
    public $ProductImage;

    public function UploadProduct()
    {

        $this->validate([
            'ProductName'=>'required',
            'ProductDescription'=>'required',
            'ProductImage'=>'required|image'
        ]);
        Product::create([
            'ProductName'=> $this->ProductName,
            'ProductDescription'=> $this->ProductDescription,
            'ProductImage'=> $this->ProductImage->store('public/photos')
        ]);

        return redirect()->back();
    }


    public function render()
    {
        return view('livewire.products',[
            'products'=>Product::all()
        ])->layout('layouts.admin');
    }
}



