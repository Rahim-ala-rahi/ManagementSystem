<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MessageDanger extends Component
{
    public function render()
    {
        return view('livewire.message-danger')
        ->layout('layouts.custom-app');
    }
}
