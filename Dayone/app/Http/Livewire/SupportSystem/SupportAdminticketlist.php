<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAdminticketlist extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-adminticketlist')
        ->layout('layouts.supportapp');
    }
}
