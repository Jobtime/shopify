<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopifyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shopify-products', [ShopifyController::class, 'index'])->name('shopify-products');
