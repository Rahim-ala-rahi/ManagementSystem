<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Coming extends Component
{
    public function render()
    {
        return view('livewire.coming')
        ->layout('layouts.custom-app');
    }
}
