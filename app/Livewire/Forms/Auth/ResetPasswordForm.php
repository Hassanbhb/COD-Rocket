<?php

namespace App\Livewire\Forms\Auth;

use Livewire\Form;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ResetPasswordForm extends Form
{
    #[Validate('required')]
    public $token;
    
    #[Validate('required|email')]
    public $email;
    
    #[Validate('required|min:8|same:passwordConfirmation')]
    public $password;

    public string $passwordConfirmation;

    public function setForm($token)
    {
        $this->email = request()->query('email', '');
        $this->token = $token;
    }

    public function renew() {
        return $this->broker()->reset(
            $this->all(), function ($user, $password) {
                $user->password = Hash::make($password);
                $user->setRememberToken(Str::random(60));
                $user->save();

                event(new PasswordReset($user));

                $this->guard()->login($user);
            }
        );
    }

    public function broker()
    {
        return Password::broker();
    }

    protected function guard()
    {
        return Auth::guard();
    }
}
