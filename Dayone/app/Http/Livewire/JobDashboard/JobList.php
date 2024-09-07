<?php

namespace App\Http\Livewire\JobDashboard;

use Livewire\Component;

class JobList extends Component
{
    public function render()
    {
        return view('livewire.job-dashboard.job-list')
        ->layout('layouts.jobapp');
    }
}
