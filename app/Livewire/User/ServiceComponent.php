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
    {$serviceName = str_replace("-"," ",$this->name);

        $service = Service::where('name_service', 'LIKE', '%' . $serviceName . '%')->first();

        $types=Type::where("service_id",$service->id)->get();
        return view('livewire.user.service-component',['types'=>$types])->layout('layouts.user');
    }
}
