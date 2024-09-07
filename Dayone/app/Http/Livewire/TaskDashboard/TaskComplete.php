<?php

namespace App\Http\Livewire\TaskDashboard;

use Livewire\Component;

class TaskComplete extends Component
{
    public function render()
    {
        return view('livewire.task-dashboard.task-complete')
        ->layout('layouts.taskapp');
    }
}
