<?php

use App\Livewire\Merchant\Dashboard;

Route::get('/', Dashboard::class)->name('home');

require_once __DIR__ . '/backoffice/admin.php';
require_once __DIR__ . '/backoffice/merchants.php';
require_once __DIR__ . '/backoffice/deliverers.php';
require_once __DIR__ . '/backoffice/freelancers.php';
