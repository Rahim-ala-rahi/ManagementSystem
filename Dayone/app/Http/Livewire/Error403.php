<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Error403 extends Component
{
    public function render()
    {
        return view('livewire.error403')
        ->layout('layouts.custom-app');
    }
}
