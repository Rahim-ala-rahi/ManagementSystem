<?php

namespace App\Http\Livewire\JobDashboard;

use Livewire\Component;

class JobApplication extends Component
{
    public function render()
    {
        return view('livewire.job-dashboard.job-application')
        ->layout('layouts.jobapp');
    }
}
