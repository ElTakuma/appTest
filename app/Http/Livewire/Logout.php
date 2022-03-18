<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Logout extends Component
{
    public function render()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        session()->flash('loyout_message', 'You logged out. GOODBYE !!');

        redirect()->to('/login');
        return view('livewire.login');
    }
}
