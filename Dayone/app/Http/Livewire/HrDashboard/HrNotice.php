<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrNotice extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-notice')
        ->layout('layouts.hrapp');
    }
}
