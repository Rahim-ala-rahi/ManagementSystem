<?php

namespace App\Http\Livewire\JobDashboard;

use Livewire\Component;

class JobApply extends Component
{
    public function render()
    {
        return view('livewire.job-dashboard.job-apply')
        ->layout('layouts.jobapp');
        
    }
}
