<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
class HomeController extends Component
{
   
    public function render()
    {
        $services=Service::all();

        return view('livewire.admin.home-controller',['services'=>$services])->layout('layouts.admin');
    }
}
