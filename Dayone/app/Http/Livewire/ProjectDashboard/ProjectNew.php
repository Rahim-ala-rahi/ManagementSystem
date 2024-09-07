<?php

namespace App\Http\Livewire\ProjectDashboard;

use Livewire\Component;

class ProjectNew extends Component
{
    public function render()
    {
        return view('livewire.project-dashboard.project-new')
        ->layout('layouts.projectapp');
    }
}
