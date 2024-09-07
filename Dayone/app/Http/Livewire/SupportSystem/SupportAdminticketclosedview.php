<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportAdminticketclosedview extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-adminticketclosedview')
        ->layout('layouts.supportapp');
        
    }
}
