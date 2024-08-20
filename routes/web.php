<?php

use App\Livewire\AboutPage;
use App\Livewire\BlogPage;
use App\Livewire\CartPage;
use App\Livewire\HomePage;
use App\Livewire\MyOrdersPage;
use App\Livewire\ProductDetailPage;
use App\Livewire\ProductsPage;
use App\Livewire\ServicesPage;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage::class);
Route::get('/services', ServicesPage::class);
Route::get('/products', ProductsPage::class);
Route::get('/about', AboutPage::class);
Route::get('/blog', BlogPage::class);
Route::get('/cart', CartPage::class);
Route::get('/products/{product}', ProductDetailPage::class);
Route::get('/orders', MyOrdersPage::class);



