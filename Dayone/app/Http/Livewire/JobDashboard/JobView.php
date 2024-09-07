<?php

namespace App\Http\Livewire\JobDashboard;

use Livewire\Component;

class JobView extends Component
{
    public function render()
    {
        return view('livewire.job-dashboard.job-view')
        ->layout('layouts.jobapp');
    }
}
