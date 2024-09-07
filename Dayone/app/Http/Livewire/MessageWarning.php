<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MessageWarning extends Component
{
    public function render()
    {
        return view('livewire.message-warning')
        ->layout('layouts.custom-app');
    }
}
