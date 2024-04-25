<?php

namespace App\Livewire\Backend\Admin;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AdminLogin extends Component
{
    public function render()
    {
        return view('livewire.backend.admin.admin-login')
        ->layout('components.layouts.dashboard');
    }
}
