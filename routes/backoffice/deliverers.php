<?php

use App\Livewire\Deliverer\Orders\OrderList;

Route::group(['as' => 'deliverer.', 'prefix' => '/deliverer'], function () {
  Route::get('/orders', OrderList::class)->name('orders');
});