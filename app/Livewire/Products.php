<?php
namespace App\Livewire;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;

class Products extends Component
{
    use WithFileUploads;
    public $ProductName;
    public $ProductDescription;
    public $ProductImage;
    public $categories;
    public $category_id;
    public $product_price;


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
            'product_price'=>'required|integer',
            'category_id'=>'required'
        ]);


        Product::create([
            'ProductName'=>$this->ProductName,
            'ProductDescription'=>$this->ProductDescription,
            'ProductImage'=>$this->ProductImage->store('public/photos'),
            'product_price'=>$this->product_price,
            'category_id'=>$this->category_id
        ]);
            session()->flash('product', 'New  Product Created.');

}

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        return redirect()->to('product')->back()->with('delete',"Product Successfully Deleted");

    }

    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.products',[
            'products'=> Product::all()
        ]);
    }


}



