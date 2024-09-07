<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportTicketlist extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-ticketlist')
        ->layout('layouts.supportapp');
    }
}
