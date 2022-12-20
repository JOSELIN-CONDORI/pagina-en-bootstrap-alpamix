<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\File;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme= 'bootstrap';

    public $Category_id;
    public function deleteCategory($category_id)
    {

       $this->category_id =$category_id;
    }
    public function destroyCategory()
    {
       $Category =Category::find($this->category_id);
       $path ='uploads/category/' . $Category->image;
       if(File::exists($path)){
        File::delete($path);
       }
       $Category->delete();
       session()->flash('message', 'Categoria Eliminada');
       $this->dispatchBrowserEvent('close-modal');
    }
    public function render()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.category.index',['categories' => $categories]);
    }
}
