<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.index')
        ->layout('layouts.hrapp');
    }
}
