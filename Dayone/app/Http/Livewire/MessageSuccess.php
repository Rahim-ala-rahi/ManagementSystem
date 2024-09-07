<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MessageSuccess extends Component
{
    public function render()
    {
        return view('livewire.message-success')
        ->layout('layouts.custom-app');
    }
}
