<?php

namespace App\Livewire\Merchant;

use Livewire\Component;

class Dashboard extends Component
{
    public $role;

    public function mount() {
        $this->role = 'merchant';
    }

    public function render()
    {
        return view("{$this->role}.dashboard");
    }
}
