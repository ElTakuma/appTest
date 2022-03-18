<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserManager extends Component
{
    public $title = 'User Manager';
    public $userLogged;
    public $users;

    public function delete($user_id) {
        $user = User::find($user_id);
        $user->delete();
        session()->flash('notify', 'User '.$user->name. ' have been deleted !');
    }

    public function render()
    {
        if(Auth::id()) $this->userLogged = Auth::user();

        $this->users = User::all();
         
        return view('livewire.user-manager')
            ->layoutData([
                'title' => $this->title,
                'user' => $this->userLogged,
            ]);
    }
}
