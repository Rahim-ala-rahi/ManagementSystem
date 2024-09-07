<?php

namespace App\Http\Livewire\HrDashboard;

use Livewire\Component;

class HrAddpayroll extends Component
{
    public function render()
    {
        return view('livewire.hr-dashboard.hr-addpayroll')
        ->layout('layouts.hrapp');
    }
}
