<?php

namespace App\Livewire\Forms\Auth;

use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use App\Models\User;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Validate('required')]
    public string $name = '';

    #[Validate('required|email|unique:users')]
    public string $email = '';

    #[Validate('required|min:8|same:passwordConfirmation')]
    public string $password = '';

    public string $passwordConfirmation = '';

    public function signUp() {
        $this->validate();

        return User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
    }
}
