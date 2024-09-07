<?php

namespace App\Http\Livewire\ClientDashboard;

use Livewire\Component;

class ClientView extends Component
{
    public function render()
    {
        return view('livewire.client-dashboard.client-view')
        ->layout('layouts.clientapp');
    }
}
