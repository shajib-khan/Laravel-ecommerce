<?php

namespace App\Livewire;
use App\Models\Product as allProduct;
use Livewire\Component;
//use Livewire\WithFileUploads;
use livewire\Attributes\Layout;
use App\Models\Category as ProductCategory;



class Products extends Component
{
    //use WithFileUploads;
    public $product_name;
    public $allProduct;
    public $Product_description;
    //public $photo;

public function UploadProduct()
{
    $this->validate([
        'product_name'=> 'required',
        'Product_description'=> 'required',
        //'product_description'=>'required',
    ]);
    allProduct::create(
        $this->only([
            'product_name',
            'product_description'
            ])
    );
    return redirect()->back()->with('product',"category created");

}
    public function render()
    {
        return view('livewire.products',
        [
            'categories'=>ProductCategory::all()
        ])
        ->layout('layouts.admin');
    }
    }



