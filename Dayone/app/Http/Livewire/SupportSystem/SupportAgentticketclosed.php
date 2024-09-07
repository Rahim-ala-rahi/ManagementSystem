<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAgentticketclosed extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-agentticketclosed')
        ->layout('layouts.supportapp');
    }
}
