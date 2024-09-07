<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportTicketclosedview extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-ticketclosedview')
        ->layout('layouts.supportapp');
    }
}
