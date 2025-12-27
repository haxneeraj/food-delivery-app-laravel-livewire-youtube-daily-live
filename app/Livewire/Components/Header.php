<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('components.header')
        ->layout(null);
    }
}
