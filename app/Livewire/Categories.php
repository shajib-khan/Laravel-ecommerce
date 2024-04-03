<?php

namespace App\Livewire;
use livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Category as ProductCategory;

class Categories extends Component
{
    public $ProductCategory;
    public $category_name="";



    public function newCategory()
    {


        $this->validate(
            ["category_name"=> "required"]
        );
        ProductCategory::create(
            $this->only(['category_name'])
        );
        $this->category_name="";

        return redirect()->back()->with('message',"category created");



    }
    public function DeleteCategories($id)
    {
        ProductCategory::find($id)->delete();
        return redirect()->back()->with('message',"category Delete");

    }


    public function render()
    {
        return view('livewire.categories',
        [
           'categories'=>ProductCategory::simplePaginate(5),
       ])
        ->layout('layouts.admin');
    }
}
