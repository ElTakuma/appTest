<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $title = "Login";

    public $userLogged = null;

    public $email;
    public $password;


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'email' => 'email',
            'password' => 'min:4'
        ]);
    }

    public function login() 
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        if(Auth::attempt($credentials)){
            session()->regenerate();

            session()->flash('login_message', 'Welcome ' . Auth::user()->name);

            redirect()->to('/');
        } else {
            session()->flash('login_error', 'Email or password is incorrect !');
        }

    }

    public function render()
    {
        if(Auth::id()) redirect()->to('/');
        // if($this->user)
        return view('livewire.login')->layoutData([
            'title' => $this->title,
            'user' => $this->userLogged,
        ]);
    }
}
