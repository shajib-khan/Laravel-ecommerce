<?php

namespace App\Livewire;
use App\Models\Category as ProductCategories;
use livewire\Attributes\Layout;
use Livewire\Component;
use Session;
class EditCategory extends Component

{
    public $category_name="";
    public $id;
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
        $categories = ProductCategories::find($this->id);
        $categories->update([
            'category_name'=> $this->category_name
        ]);
        session()->flash('categoryUpdate', 'Category successfully updated.');
        return redirect()->to('category');
    }
    public function render()
    {
        return view('livewire.edit-category')
        ->layout('components.layouts.dashboard');

    }
}
