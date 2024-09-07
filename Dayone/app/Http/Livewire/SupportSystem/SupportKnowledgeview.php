<?php

namespace App\Http\Livewire\SupportSystem;

use Livewire\Component;

class SupportKnowledgeview extends Component
{
    public function render()
    {
        return view('livewire.support-system.support-knowledgeview')
        ->layout('layouts.supportapp');
    }
}
