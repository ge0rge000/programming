<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Service;
class BlogDetailComponent extends Component
{
    public  $name;
    public function mount(){
        $this->name;
    }
    public function render()
    {        $blogs_recent = Blog::inRandomOrder()->take(6)->get();

        $services=Service::all();
        $blog=Blog::where("question",$this->name)->first();
        return view('livewire.user.blog-detail-component',['blog'=>$blog,'services'=>$services,'blogs_recent'=>$blogs_recent])->layout('layouts.user');
    }
}
