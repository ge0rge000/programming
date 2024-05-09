<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Service;
use App\Models\Quote;
class ContactComponent extends Component
{
    public $name;
    public $email;
    public $mobile;
    public $service;
    public $message;
    protected $rules = [
        'name' => 'required',
        'mobile' => 'required',
        'service' => 'required',
        'message' => 'required'
    ];

    public function add_quote(){
        $quote=new Quote;
        $quote->name=$this->name;
        $quote->email=$this->email;
        $quote->mobile=$this->mobile;
        $quote->service=$this->service;
        $quote->message=$this->message;
        $quote->save();
        session()->flash('message', 'Quote request successfully sent.'); // Flash a success message

    }
    public function render()
    {
        $services=Service::all();
        return view('livewire.user.contact-component',['services'=>$services])->layout('layouts.user');
}
}
