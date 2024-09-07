<?php

namespace App\Http\Livewire\TaskDashboard;

use Livewire\Component;

class TaskProfile extends Component
{
    public function render()
    {
        return view('livewire.task-dashboard.task-profile')
        ->layout('layouts.taskapp');
    }
}
