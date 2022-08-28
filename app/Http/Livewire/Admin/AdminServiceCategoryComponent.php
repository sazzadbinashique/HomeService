<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ServiceCategory;
use Livewire\WithPagination;


class AdminServiceCategoryComponent extends Component
{
    use WithPagination;


    public function deleteServiceCategory($id){

        $scategory = ServiceCategory::find($id);

        if($scategory->image){
            unlink('images/categories' . '/' . $scategory->image);
        }
        $scategory->delete();
        session()->flash('message', 'Service Category has been deteted successfully!');
    }

    public function render()
    {
        $serviceCategories = ServiceCategory::paginate(10);
        return view('livewire.admin.admin-service-category-component', ['serviceCategories'=> $serviceCategories])->layout('layouts.base');
    }
}
