<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ForgotPassword2 extends Component
{
    public function render()
    {
        return view('livewire.forgot-password2')
        ->layout('layouts.custom-app');
    }
}
