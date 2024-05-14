<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithFileUploads;
class EditServiceComponent extends Component
{
    use WithFileUploads;
    public $name_service;
    public $icon;
    public $tag;
    public $small_desc;
    public $desc1;
    public $desc2;
    public $photo;
    public $newphoto;
    public $id_service;
    public function mount(){
        $service=Service::where("id",$this->id_service)->first();
        $this->name_service=$service->name_service;
        $this->icon=$service->icon;
        $this->tag=$service->tag;
        $this->small_desc=$service->small_desc;
        $this->desc1=$service->desc_1;
      $this->desc2=$service->desc_2;
        $this->photo=$service->desc_3;
    }

    public function edit_service(){
        $service=Service::where("id",$this->id_service)->first();
        $service->name_service=$this->name_service;
        $service->icon=$this->icon;
        $service->tag=$this->tag;
        $service->small_desc=$this->small_desc;
        $service->desc_1=$this->desc1;
        $service->desc_2=$this->desc2;

        ///desc3 -->photo
        if ($this->newphoto) {
            $imageName = uniqid() . '.' . $this->newphoto->getClientOriginalExtension();
            $fileContent = file_get_contents($this->newphoto->getRealPath());
            $imagePath = public_path('user/photos/' . $imageName);
            file_put_contents($imagePath, $fileContent);;
            $service->desc_3 = $imageName;
        }

        $service->save();
    }
    public function render()
    {
        return view('livewire.admin.edit-service-component')->layout('layouts.admin');;
    }
}
