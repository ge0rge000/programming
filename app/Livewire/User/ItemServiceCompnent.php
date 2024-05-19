<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Type;
use App\Models\Service;
class ItemServiceCompnent extends Component
{
    public $name_type;
    public function mount(){
        $this->name_type;
     
    }
    public function render()
    {
        $services=Service::all();

        $type=Type::where('name_type',  $this->name_type)->with('service')->first();
        $types=Type::where("service_id",$type->service_id)->get();
        return view('livewire.user.item-service-compnent',['type'=>$type,'services'=>$services,'types'=>$types])->layout('layouts.user');
    }
}
