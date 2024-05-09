<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Service;
class ServicesComponent extends Component
{
    public function render()
    { $services=Service::all();
        return view('livewire.user.services-component',['services'=>$services])->layout('layouts.user');
    }
}
