<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAdminarticles extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-adminarticles')
        ->layout('layouts.supportapp');
    }
}
