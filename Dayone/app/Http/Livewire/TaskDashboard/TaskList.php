<?php

namespace App\Http\Livewire\TaskDashboard;

use Livewire\Component;

class TaskList extends Component
{
    public function render()
    {
        return view('livewire.task-dashboard.task-list')
        ->layout('layouts.taskapp');
    }
}
