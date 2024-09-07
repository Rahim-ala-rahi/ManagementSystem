<?php

namespace App\Http\Livewire\TaskDashboard;

use Livewire\Component;

class TaskBoard extends Component
{
    public function render()
    {
        return view('livewire.task-dashboard.task-board')
        ->layout('layouts.taskapp');
    }
}
