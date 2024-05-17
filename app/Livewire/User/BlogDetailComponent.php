<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Service;
class BlogDetailComponent extends Component
{
    public  $id_blog;
    public function mount(){
        $this->id_blog;

    }
    public function render()
    {        $blogs_recent = Blog::inRandomOrder()->take(6)->get();
        $services=Service::all();
        $blog=Blog::where("id",$this->id_blog)->first();

        return view('livewire.user.blog-detail-component',['blog'=>$blog,'services'=>$services,'blogs_recent'=>$blogs_recent])->layout('layouts.user');
    }
}
