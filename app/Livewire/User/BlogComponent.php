<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Service;
class BlogComponent extends Component
{
    public function render()
    {
        $blogs=Blog::paginate(10);
        $blogs_recent = Blog::inRandomOrder()->take(6)->get();

        $services=Service::all();
        return view('livewire.user.blog-component',['blogs'=>$blogs,'services'=>$services,'blogs_recent'=>$blogs_recent])->layout('layouts.user');
    }
}
