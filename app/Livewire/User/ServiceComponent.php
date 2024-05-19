<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Type;
use App\Models\Service;

class ServiceComponent extends Component
{
    public $name;
    public function mount(){
        $this->name;
    }
    public function render()
    {

        $service = Service::where('name_service', $this->name)->first();

        $types=Type::where("service_id",$service->id)->get();
        return view('livewire.user.service-component',['types'=>$types,'service'=>$service])->layout('layouts.user');
    }
}
