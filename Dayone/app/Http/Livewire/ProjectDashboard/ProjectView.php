<?php

namespace App\Http\Livewire\ProjectDashboard;

use Livewire\Component;

class ProjectView extends Component
{
    public function render()
    {
        return view('livewire.project-dashboard.project-view')
        ->layout('layouts.projectapp');
    }
}
