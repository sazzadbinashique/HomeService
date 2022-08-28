<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ServiceCategory;


class ServiceCategoriesComponent extends Component
{
    public function render()
    {
        $serviceCategories= ServiceCategory::all();
        return view('livewire.service-categories-component', ['serviceCategories'=>$serviceCategories])->layout('layouts.base');
    }
}
