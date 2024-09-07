<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ForgotPassword1 extends Component
{
    public function render()
    {
        return view('livewire.forgot-password1')
        ->layout('layouts.custom-app');
    }
}
