<?php

namespace App\Http\Livewire\TaskDashboard;

use Livewire\Component;

class TaskHold extends Component
{
    public function render()
    {
        return view('livewire.task-dashboard.task-hold')
        ->layout('layouts.taskapp');
    }
}
