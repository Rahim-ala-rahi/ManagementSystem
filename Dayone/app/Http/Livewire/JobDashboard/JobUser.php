<?php

namespace App\Http\Livewire\JobDashboard;

use Livewire\Component;

class JobUser extends Component
{
    public function render()
    {
        return view('livewire.job-dashboard.job-user')
        ->layout('layouts.jobapp');
    }
}
