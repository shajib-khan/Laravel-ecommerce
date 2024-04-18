<?php

namespace App\Livewire;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category as ProductCategories;
use livewire\Attributes\Layout;
class Products extends Component
{
    use WithFileUploads;
    public $ProductName;
    public $ProductDescription;
    public $ProductImage;
    public $categories;
    public $category_id;

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function uploadProduct()
    {
        $this->validate([
            'ProductName'=>'required',
            'ProductDescription'=>'required',
            'ProductImage'=>'required|image',
            'category_id'=>'required'
        ]);
        Product::create([
            'ProductName'=> $this->ProductName,
            'ProductDescription'=> $this->ProductDescription,
            'ProductImage'=> $this->ProductImage->store('public/photos')
        ]);

        return redirect('product')->back()->with('product',"New Product Created");
    }

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return redirect('product')->back()->with('delete',"Product Successfully Delete");
    }

    public function render()
    {
        return view('livewire.products',[
            'products'=> Product::all()
        ])->layout('layouts.admin');
    }


}



