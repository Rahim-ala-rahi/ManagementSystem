<?php

namespace App\Http\Livewire\TaskDashboard;

use Livewire\Component;

class TaskView extends Component
{
    public function render()
    {
        return view('livewire.task-dashboard.task-view')
        ->layout('layouts.taskapp');
    }
}
