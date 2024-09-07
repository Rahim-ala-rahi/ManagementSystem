<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportOpenticket extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-openticket')
        ->layout('layouts.supportapp');
    }
}
