<?php

namespace App\Livewire\Forms\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required')]
    public $emailOrUsername = '';

    #[Validate('required')]
    public $password = '';

    public $remember = false;

    public function isAuthenticated() {
        $field = filter_var($this->emailOrUsername, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return Auth::attempt([
            $field => $this->emailOrUsername, 'password' => $this->password
        ], $this->remember);
    }
}
