<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportTicketactive extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-ticketactive')
        ->layout('layouts.supportapp');
    }
}
