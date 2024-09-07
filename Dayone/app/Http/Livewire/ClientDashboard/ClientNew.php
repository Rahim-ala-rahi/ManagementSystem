<?php

namespace App\Http\Livewire\ClientDashboard;

use Livewire\Component;

class ClientNew extends Component
{
    public function render()
    {
        return view('livewire.client-dashboard.client-new')
        ->layout('layouts.clientapp');
    }
}
