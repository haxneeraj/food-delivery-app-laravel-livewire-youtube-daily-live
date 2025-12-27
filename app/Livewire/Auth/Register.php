<?php

namespace App\Livewire\Auth;

use Livewire\Component;

use App\Models\User;
use DirectoryTree\Authorization\Role;

class Register extends Component
{

    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email:dns|max:255|unique:users',
        'phone' => 'nullable|string|max:20',
        'password' => 'required|string|min:8|confirmed',
    ];

    protected $messages = [
        'email.unique' => 'The email has already been taken.',
        'password.confirmed' => 'The password confirmation does not match.',
    ];

    public function updatedEmail()
    {
        $this->validateOnly('email');
    }

    public function register()
    {
        // validate the form data
        $this->validate();

        // create the user
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'password' => bcrypt($this->password),
        ]);

        // assign default role to the user
        $userRole = Role::where('name', 'user')->first();
        if ($userRole) {
            $user->roles()->save($userRole);
        }

        // success message
        session()->flash('status', 'Registration successful! You can now log in.');

        // redirect to the login page
        return redirect()->route('login');
    }


    public function render()
    {
        return view('auth.register');
    }
}