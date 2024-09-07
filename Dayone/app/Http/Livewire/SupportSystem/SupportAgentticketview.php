<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAgentticketview extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-agentticketview')
        ->layout('layouts.supportapp');
    }
}
