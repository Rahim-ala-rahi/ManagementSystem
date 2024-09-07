<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAdmincustomerview extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-admincustomerview')
        ->layout('layouts.supportapp');
    }
}
