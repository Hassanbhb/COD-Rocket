<?php

namespace App\Livewire\Merchant\Balance;

use App\Livewire\Component;
use Livewire\Attributes\Computed;

class BalanceBadge extends Component
{
    #[Computed]
    public function balance()
    {
        return $this->authUser()->mybalance;
    }

    public function render()
    {
        return view('merchant.balance.balance-badge');
    }
}
