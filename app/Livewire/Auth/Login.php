<?php

namespace App\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = false;

    protected $rules = [
        'email' => 'required|string|email:dns|max:255',
        'password' => 'required|string|min:8',
    ];

    public function mount()
    {
        // if the user is already authenticated, redirect to home
        if (auth()->check()) {
            return redirect()->route('home');
        }
    }

    public function login()
    {
        // validate the form data
        $this->validate();

        // attempt to log in the user
        if (auth()->attempt($this->only('email', 'password'), $this->remember)) {
            // redirect to the intended page
            return redirect()->intended('/');
        }

        // if login fails, add an error message to status
        session()->flash('error', 'Invalid email or password.');
    }

    public function render()
    {
        return view('auth.login');
    }
}