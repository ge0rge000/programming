<?php

namespace App\Livewire\User;

use Livewire\Component;

class BlogComponent extends Component
{
    public function render()
    {
        return view('livewire.user.blog-component')->layout('layouts.user');
    }
}
