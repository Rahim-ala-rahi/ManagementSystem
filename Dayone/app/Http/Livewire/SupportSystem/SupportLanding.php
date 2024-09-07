<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportLanding extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-landing')
        ->layout('layouts.supportlanding-app');
    }
}
