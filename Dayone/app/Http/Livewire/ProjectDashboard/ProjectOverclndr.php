<?php

namespace App\Http\Livewire\ProjectDashboard;

use Livewire\Component;

class ProjectOverclndr extends Component
{
    public function render()
    {
        return view('livewire.project-dashboard.project-overclndr')
        ->layout('layouts.projectapp');
    }
}
