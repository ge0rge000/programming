<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Quote;
class ShowQuoteComponent extends Component
{
    public $quotes;
    public function render()
    {
        $this->quotes=Quote::all();
        return view('livewire.admin.show-quote-component')->layout('layouts.admin');
    }
}
