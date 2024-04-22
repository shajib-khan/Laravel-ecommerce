<?php

namespace App\Livewire\Backend\Dashboard;
use Livewire\Component;
use Livewire\Attributes\Layout;

class AdminDashboard extends Component
{
    #[Layout('components.layouts.dashboard')]
    public function render()
    {
        return view('livewire.backend.dashboard.admin-dashboard');
    }
}
