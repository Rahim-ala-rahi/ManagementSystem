<?php

namespace App\Http\Livewire\TaskDashboard;

use Livewire\Component;

class TaskRunning extends Component
{
    public function render()
    {
        return view('livewire.task-dashboard.task-running')
        ->layout('layouts.taskapp');
    }
}
