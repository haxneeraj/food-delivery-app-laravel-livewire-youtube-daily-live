<?php

namespace App\Livewire\Auth;

use Livewire\Component;

use Illuminate\Support\Facades\DB;

use App\Models\User;
use DirectoryTree\Authorization\Role;

class Register extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
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

        // begin transaction
        DB::beginTransaction();

        try{
            // create the user
            $user = User::create([
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'full_name' => $this->first_name . ' ' . $this->last_name,
                'email' => $this->email,
                'phone' => $this->phone,
                'password' => bcrypt($this->password),
            ]);

            // assign default role to the user
            $userRole = Role::where('name', 'user')->firstOrFail();
            $user->roles()->save($userRole);

            // commit transaction
            DB::commit();

            // success message
            session()->flash('status', 'Registration successful! You can now log in.');

            // redirect to the login page
            return redirect()->route('login');

        } catch (\Exception $e) {
            // Log the Errors
            \Log::error([
                'message' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
            ]);
            
            // rollback transaction
            DB::rollBack();

            // error message
            session()->flash('error', 'Registration failed. Please try again.');
        }
    }


    public function render()
    {
        return view('auth.register');
    }
}