<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
class ShowServicesCategory extends Component
{
    public function render()
    {
        $services=Service::all();
        return view('livewire.admin.show-services-category',['services'=>$services])->layout('layouts.admin');
    }
}
