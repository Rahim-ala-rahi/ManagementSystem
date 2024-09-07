<?php

namespace App\Http\Livewire\ClientDashboard;

use Livewire\Component;

class ClientList extends Component
{
    public function render()
    {
        return view('livewire.client-dashboard.client-list')
        ->layout('layouts.clientapp');
    }
}
