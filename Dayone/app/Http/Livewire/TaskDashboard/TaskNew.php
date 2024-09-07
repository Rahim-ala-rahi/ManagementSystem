<?php

namespace App\Http\Livewire\TaskDashboard;

use Livewire\Component;

class TaskNew extends Component
{
    public function render()
    {
        return view('livewire.task-dashboard.task-new')
        ->layout('layouts.taskapp');
    }
}
