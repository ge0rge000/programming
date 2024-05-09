<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Type;
class ShowTypeCategory extends Component
{
    public $service_id;

    public function mount(){
        $this->service_id;
    }
    public function render()
    {
        $types_services=Type::where('service_id',$this->service_id)->get();
        return view('livewire.admin.show-type-category',['types'=>$types_services])->layout('layouts.admin');
    }
}
