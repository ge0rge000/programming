<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithFileUploads;
class AddBlogComponent extends Component
{
    use WithFileUploads;
    public $question;
    public $answer;
    public $photo;
    public function mount()
{
    $this->photo;
}
    public function add_new(){
        $blog=new Blog;
        $blog->question=$this->question;
       $blog->answer= $this->answer;

        if ($this->photo) {
            $imageName = uniqid() . '.' . $this->photo->getClientOriginalExtension();
            $fileContent = file_get_contents($this->photo->getRealPath());
            $imagePath = public_path('user/photos/' . $imageName);
            file_put_contents($imagePath, $fileContent);
            $blog->photo = $imageName;
        }
        $this->photo=$blog->photo;
        $blog->save();
        return redirect()->route("add_blog");
    }
    public function render()
    {
        return view('livewire.admin.add-blog-component')->layout('layouts.admin');
    }
}
