<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResetPassword2 extends Component
{
    public function render()
    {
        return view('livewire.reset-password2')
        ->layout('layouts.custom-app');
    }
}
