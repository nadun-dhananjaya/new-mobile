<?php

use App\Livewire\Cart\CartPage;
use App\Livewire\Home\HomePage;
use App\Livewire\Order\OrderMake;
use App\Livewire\Products\EarphonePage;
use App\Livewire\Products\HeadPhonesPage;
use App\Livewire\Products\ProductView;
use App\Livewire\Products\SpeakerPage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


Route::get('/',HomePage::class)->name('home');

Route::get('/headphones',HeadPhonesPage::class)->name('head-phones');
Route::get('/earphones',EarphonePage::class)->name('ear-phones');
Route::get('/speakers',SpeakerPage::class)->name('speakers');


Route::get('{product}/product-view',ProductView::class)->name('product-view');


Route::get('/dashboard',function(){
    return Redirect::route('home');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware('auth')->group(function(){
    Route::get('/cart',CartPage::class)->name('cart');

    // make order
    Route::get('/make-order',OrderMake::class)->name('make-order');
});

require __DIR__.'/auth.php';
