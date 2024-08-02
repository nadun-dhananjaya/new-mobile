<?php

use App\Livewire\Cart\CartPage;
use App\Livewire\Home\HomePage;
use App\Livewire\Products\HeadPhonesPage;
use App\Livewire\Products\ProductView;
use Illuminate\Support\Facades\Route;


Route::get('/',HomePage::class)->name('home');

Route::get('/headphones',HeadPhonesPage::class)->name('head-phones');


Route::get('/product-view',ProductView::class)->name('product-view');

Route::get('/cart',CartPage::class)->name('cart-page');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';
