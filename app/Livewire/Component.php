<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component as LivewireComponent;

class Component extends LivewireComponent {
	#[Computed]
	public function authUser(): ?User
	{
		return null;
	}

	protected function notify(string $message, string $status = "success"): void
	{
		$this->dispatch('toast:show', compact('message', 'status'));
	}
}
