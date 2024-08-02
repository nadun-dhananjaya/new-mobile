<?php

use App\Livewire\Home\HomePage;
use App\Livewire\Products\HeadPhonesPage;
use Illuminate\Support\Facades\Route;


Route::get('/',HomePage::class)->name('home');

Route::get('/headphones',HeadPhonesPage::class)->name('head-phones');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');


require __DIR__.'/auth.php';
