<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class WelcomeAdmin extends Component
{
    public function render()
    {
        return view('livewire.admin.welcome-admin')->layout('layouts.admin');
    }
}
