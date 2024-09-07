<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAgentdash extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-agentdash')
        ->layout('layouts.supportapp');
    }
}
