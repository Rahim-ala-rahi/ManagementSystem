<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Error503 extends Component
{
    public function render()
    {
        return view('livewire.error503')
        ->layout('layouts.custom-app');
    }
}
