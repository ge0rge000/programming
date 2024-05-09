<?php

namespace App\Livewire\User;

use Livewire\Component;

class TypeServiceComponent extends Component
{
    public $service_id;

    public function mount(){

    }
    public function render()
    {
        return view('livewire.user.type-service-component')->layout('layouts.user');
    }
}
