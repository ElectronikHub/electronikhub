<?php

use App\Livewire\AboutPage;
use App\Livewire\Auth\ForgotPasswordPage;
use App\Livewire\Auth\LoginPage;
use App\Livewire\Auth\RegisterPage;
use App\Livewire\Auth\ResetPasswordPage;
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
Route::get('/products/{slug}', ProductDetailPage::class);
Route::get('/orders', MyOrdersPage::class);

Route::get('/login', LoginPage::class);
Route::get('/register', RegisterPage::class);
Route::get('/forgot', ForgotPasswordPage::class);
Route::get('/reset', ResetPasswordPage::class);



