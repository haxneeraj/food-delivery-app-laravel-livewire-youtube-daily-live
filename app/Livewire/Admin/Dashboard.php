<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('admin.dashboard')
        ->layout('layouts.admin');
    }
}
