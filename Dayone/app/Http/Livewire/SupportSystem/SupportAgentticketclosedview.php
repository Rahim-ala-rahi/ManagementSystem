<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAgentticketclosedview extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-agentticketclosedview')
        ->layout('layouts.supportapp');
    }
}
