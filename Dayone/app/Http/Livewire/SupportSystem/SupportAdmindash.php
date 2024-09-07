<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAdmindash extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-admindash')
        ->layout('layouts.supportapp');
    }
}
