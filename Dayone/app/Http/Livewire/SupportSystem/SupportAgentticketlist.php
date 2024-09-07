<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAgentticketlist extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-agentticketlist')
        ->layout('layouts.supportapp');
    }
}
