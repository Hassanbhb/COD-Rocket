<?php

use App\Livewire\Merchant\Balance\BalanceHistory;
use App\Livewire\Merchant\Customers\CustomerList;
use App\Livewire\Merchant\Expenses\ExpenseList;
use App\Livewire\Merchant\Integrations\IntegrationList;
use App\Livewire\Merchant\Orders\OrderList;
use App\Livewire\Merchant\Partnerships\Freelancers\PartnershipList as DelivererPartnership;
use App\Livewire\Merchant\Partnerships\Freelancers\PartnershipList as FreelancerPartnership;
use App\Livewire\Merchant\Payments\PaymentList;
use App\Livewire\Merchant\Products\ProductList;
use App\Livewire\Merchant\Products\Transfers\TransferList;
use App\Livewire\Merchant\Products\Warehouses\WarehouseList;
use App\Livewire\Merchant\Services\ServiceList;
use App\Livewire\Merchant\Support;

Route::group(['as' => 'merchant.'], function() {
	Route::get('/orders', OrderList::class)->name('orders');
	Route::get('/customers', CustomerList::class)->name('customers');
	Route::get('/integrations', IntegrationList::class)->name('integrations');
	
	Route::get('/products', ProductList::class)->name('products');
	Route::get('/transfers', TransferList::class)->name('transfers');
	Route::get('/warehouses', WarehouseList::class)->name('warehouses');

	Route::get('/payment', PaymentList::class)->name('payment');
	Route::get('/expenses', ExpenseList::class)->name('expenses');

	Route::get('/partnership/deliverers', DelivererPartnership::class)->name('partnership.deliverers');
	Route::get('/partnership/freelancers', FreelancerPartnership::class)->name('partnership.freelancers');

	Route::get('/balance/history', BalanceHistory::class)->name('balance.history');
	Route::get('/services', ServiceList::class)->name('services');
	Route::get('/support', Support::class)->name('support');
});