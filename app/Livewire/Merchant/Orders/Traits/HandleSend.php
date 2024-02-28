<?php

namespace App\Livewire\Merchant\Orders\Traits;

use Livewire\Attributes\Computed;

trait HandleSend
{
    #[Computed]
    public function canSendToDeliverer() 
    {
        return true;
    }

    #[Computed]
    public function canSendToFreelancer() 
    {
        return true;
    }
}