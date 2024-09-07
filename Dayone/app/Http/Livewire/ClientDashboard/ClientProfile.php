<?php

namespace App\Http\Livewire\ClientDashboard;

use Livewire\Component;

class ClientProfile extends Component
{
    public function render()
    {
        return view('livewire.client-dashboard.client-profile')
        ->layout('layouts.clientapp');
    }
}
