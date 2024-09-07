<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportTicketview extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-ticketview')
        ->layout('layouts.supportapp');
    }
}
