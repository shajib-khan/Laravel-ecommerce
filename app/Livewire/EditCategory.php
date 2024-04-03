<?php

namespace App\Livewire;
use App\Models\Category as ProductCategories;
use livewire\Attributes\Layout;
use Livewire\Component;

class EditCategory extends Component

{
    public $ProductCategories;
    public $category_name;
    public  $id;
    public function mount($id)
    {
        $categories = ProductCategories::find($id);
        $this->category_name = $categories->category_name;
    }
    public function UpdateCategory()
    {
        $this->validate([
            'category_name' => 'required',
        ]);
        $categories = ProductCategories::find($this->category_name);
        $categories->update([
            'category_name'=> $this->category_name
        ]);






        return redirect()->back()->with('message',"category updated");


    }
    public function render()
    {
        return view('livewire.edit-category')
        ->layout('layouts.admin');
    }
}
