<?php

namespace App\Http\Livewire\SuperAdmin;

use Livewire\Component;

class SuperadminSubscription extends Component
{
    public function render()
    {
        return view('livewire.super-admin.superadmin-subscription')
        ->layout('layouts.supadminapp');
    }
}
