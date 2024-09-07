<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ResetPassword1 extends Component
{
    public function render()
    {
        return view('livewire.reset-password1')
        ->layout('layouts.custom-app');
    }
}
