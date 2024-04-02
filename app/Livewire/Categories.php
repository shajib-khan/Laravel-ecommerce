<?php

namespace App\Livewire;
use livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Category as ProductCategory;

class Categories extends Component
{
    public $category;
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


    public function render()
    {
        return view('livewire.categories')
        ->layout('layouts.admin');
    }
}
