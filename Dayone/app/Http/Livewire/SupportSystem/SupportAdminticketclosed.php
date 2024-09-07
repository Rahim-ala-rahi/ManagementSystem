<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAdminticketclosed extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-adminticketclosed')
        ->layout('layouts.supportapp');
    }
}
