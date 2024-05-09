<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Type;
use Livewire\WithFileUploads;
class EditTypeCategory extends Component
{
    use WithFileUploads;
    public $type_id;
    public $name_type;
    public $icon;
    public $tag;
    public $small_desc;
    public $desc1;
    public $desc2;
    public $desc3;
    public $photo;
    public $newphoto;
    public function mount(){
        $type=Type::where('id',$this->type_id)->first();
     $this->name_type= $type->name_type;
     $this->icon= $type->icon ;
        $this->tag=    $type->tag;
        $this->small_desc=  $type->small_desc;
      $this->desc1=     $type->desc_1;
       $this->desc2=     $type->desc_2;
       $this->desc3=     $type->desc_3 ;
       $this->photo =   $type->photo ;
    }
    public function edit_type()
    {
        $type=Type::where('id',$this->type_id)->first();
        $type->name_type = $this->name_type;
        $type->icon = $this->icon;
        $type->tag = $this->tag;
        $type->small_desc = $this->small_desc;
        $type->desc_1 = $this->desc1;
        $type->desc_2 = $this->desc2;
        $type->desc_3 = $this->desc3;


        if ($this->newphoto) {
            $imageName = uniqid() . '.' . $this->newphoto->getClientOriginalExtension();
            $fileContent = file_get_contents($this->newphoto->getRealPath());
            $imagePath = public_path('user/photos/' . $imageName);
            file_put_contents($imagePath, $fileContent);;
            $type->photo = $imageName;  
        }
        $type->save();
    }

    public function render()
    {
        return view('livewire.admin.edit-type-category')->layout('layouts.admin');
    }
}
