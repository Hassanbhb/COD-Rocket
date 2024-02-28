<?php

namespace App\Livewire\Merchant\Orders;

use App\Livewire\Component;
use App\Traits\Interactions\InteractWithProducts;
use Livewire\Attributes\Computed;

class OrderCreate extends Component
{
    use InteractWithProducts;

    public int $discountValue = 0;
    public string $discountType = "%";

    #[Computed]
	public function total()
	{
		return array_reduce($this->selectedProducts, function($carry, $item) {
			return $carry + ($item['qty'] * $item['price']);
		}, 0);
	}

    #[Computed]
	public function discount()
	{
		return $this->discountType = 'Dh' ? $this->discountValue : (
            $this->total - ($this->total / $this->discountValue)
        );
	}

    public function render()
    {
        return view('merchant.orders.order-create');
    }
}
