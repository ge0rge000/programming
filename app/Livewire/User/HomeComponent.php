<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Service;
use App\Models\Type;
class HomeComponent extends Component
{
    public $types_website;
    public $types_iot;
    public $types_apps;
    public function render()
    {
        $services=Service::with("types")->get();


        return view('livewire.user.home-component',['services'=>$services])->layout('layouts.user');
    }
}
