<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{
    public string $phone;

    public function mount()
    {
        $this->phone = '';
    }

    public function sendSms()
    {
        dd('sms sent');
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
