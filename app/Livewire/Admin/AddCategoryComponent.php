<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
class AddCategoryComponent extends Component
{
    public $name_service;
    public $icon;
    public $tag;
    public $small_desc;
    public $desc1;
    public $desc2;
    public $desc3;
    public function add_serivce(){
        $service= new Service;
        $service->name_service=$this->name_service;
        $service->icon=$this->icon;
        $service->tag=$this->tag;
        $service->small_desc=$this->small_desc;
        $service->desc_1=$this->desc1;
        $service->desc_2=$this->desc2;
        $service->desc_3=$this->desc3;
        $service->save();
    }
    public function render()
    {
        return view('livewire.admin.add-category-component')->layout('layouts.admin');
    }
}
