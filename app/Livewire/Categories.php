<?php

namespace App\Livewire;
use livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Category as ProductCategories;

class Categories extends Component
{
    public $category_name="";

    public function newCategory()
    {
        $this->validate(
            ["category_name"=> "required"]
        );
        ProductCategories::create(
            $this->only(['category_name'])
        );
        $this->category_name="";

        return redirect()->back()->with('message',"New Category Created");
    }
    public function DeleteCategories($id)
    {
        ProductCategories::find($id)->delete();
        return redirect()->back()->with('message',"Category Deleted");
    }
    public function render()
    {
        return view('livewire.categories',
        [
           'categories'=>ProductCategories::simplePaginate(5),
       ])
        ->layout('layouts.admin');
    }

}
