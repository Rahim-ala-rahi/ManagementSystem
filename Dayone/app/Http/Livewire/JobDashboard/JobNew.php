<?php

namespace App\Http\Livewire\JobDashboard;

use Livewire\Component;

class JobNew extends Component
{
    public function render()
    {
        return view('livewire.job-dashboard.job-new')
        ->layout('layouts.jobapp');
    }
}
