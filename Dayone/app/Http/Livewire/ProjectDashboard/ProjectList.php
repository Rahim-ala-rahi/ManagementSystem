<?php

namespace App\Http\Livewire\ProjectDashboard;

use Livewire\Component;

class ProjectList extends Component
{
    public function render()
    {
        return view('livewire.project-dashboard.project-list')
        ->layout('layouts.projectapp');
    }
}
