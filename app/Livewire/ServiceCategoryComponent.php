<?php

namespace App\Livewire;

use App\Models\ServiceCategory;
use Livewire\Component;

class ServiceCategoryComponent extends Component
{
    public function render()
    {
        $scategories = ServiceCategory::all();
        return view('livewire.service-category-component',['scategories'=> $scategories])->layout('layouts.base');
    }
}
