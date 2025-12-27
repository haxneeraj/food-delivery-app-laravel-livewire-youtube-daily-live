<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Site\HomeComponent;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

Route::get('/', HomeComponent::class)->name('home');

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
