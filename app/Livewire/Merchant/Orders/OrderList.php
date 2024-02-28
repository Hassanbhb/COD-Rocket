<?php

namespace App\Livewire\Merchant\Orders;

use App\Livewire\Component;
use App\Models\Orders\Order;
use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Attributes\Computed;
use App\Livewire\Merchant\Orders\Traits\HandleSend;

class OrderList extends Component
{
    use WithPagination, HandleSend;

    #[Url(keep: false)]
    public $name = null;

    public $selectOrders = [];

    #[Computed]
    public function hasSelection() {
        return !empty($this->selectOrders);
    }

    public function mount()
    {}

    #[Computed(persist: true)]
    public function query() {
        return $this->authUser()->orders()
            ->with(['status', 'deliverer', 'customer.phone'])
            ->withCount('products');
    }

    #[Computed]
    public function withSearch() {
        return $this->query()
            ->when($this->name, function($query) {
                $query->whereHas('customer', function ($query) {
                    $query->where('first_name', 'like', "%{$this->name}%");
                });
            });
    }

    public function render()
    {
        $orders = $this->withSearch()
            ->paginate(10);

        return view('merchant.orders.order-list', compact('orders'));
    }
}
