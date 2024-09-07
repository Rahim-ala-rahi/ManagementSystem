<?php

namespace App\Http\Livewire\TaskDashboard;

use Livewire\Component;

class TaskOverclndr extends Component
{
    public function render()
    {
        return view('livewire.task-dashboard.task-overclndr')
        ->layout('layouts.taskapp');
    }
}
