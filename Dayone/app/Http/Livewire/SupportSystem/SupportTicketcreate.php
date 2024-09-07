<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportTicketcreate extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-ticketcreate')
        ->layout('layouts.supportapp');
    }
}
