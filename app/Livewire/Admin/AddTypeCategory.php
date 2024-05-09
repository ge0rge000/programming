<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Service;
use App\Models\Type;
use Livewire\WithFileUploads;
class AddTypeCategory extends Component
{
    use WithFileUploads;

    public $name_type;
    public $icon;
    public $tag;
    public $small_desc;
    public $desc1;
    public $desc2;
    public $desc3;
    public $categeory_service;
    public $photo;

    public function add_type()
    {
        $type = new Type;
        $type->name_type = $this->name_type;
        $type->icon = $this->icon;
        $type->tag = $this->tag;
        $type->small_desc = $this->small_desc;
        $type->desc_1 = $this->desc1;
        $type->desc_2 = $this->desc2;
        $type->desc_3 = $this->desc3;
        $type->service_id = $this->categeory_service;

        if ($this->photo) {
            $imageName = uniqid() . '.' . $this->photo->getClientOriginalExtension();
            $fileContent = file_get_contents($this->photo->getRealPath());
            $imagePath = public_path('user/photos/' . $imageName);
            file_put_contents($imagePath, $fileContent);;
            $type->photo = $imageName;  // Saving the path in the 'photo' column
        }

        $type->save();
    }

    public function render()
    {
        $services=Service::all();
        return view('livewire.admin.add-type-category',['services'=>$services])->layout('layouts.admin');
    }
}
