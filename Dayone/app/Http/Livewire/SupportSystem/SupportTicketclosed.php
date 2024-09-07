<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportTicketclosed extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-ticketclosed')
        ->layout('layouts.supportapp');
    }
}
