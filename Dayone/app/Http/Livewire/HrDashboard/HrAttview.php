<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrAttview extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-attview')
        ->layout('layouts.hrapp');
    }
}
