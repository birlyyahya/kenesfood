<?php

use App\Http\Controllers\CareerController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\OutletsController;
use App\Http\Controllers\PromoController;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;


// Route::view('/', 'homepage');
Route::get('/', [HomepageController::class, 'index'])->name('homepage');

Route::controller(CatalogController::class)->group(function () {
    Route::get('/catalog', 'index')->name('catalog');
    Route::get('/catalog/{slug}', 'show')->name('catalog.show');
});
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category');
Route::view('/about', 'about')->name('about');

Route::get('/outlets', [OutletsController::class, 'index'])->name('outlets');

// Route::view('/outlets', 'outlets')->name('outlets');
Route::controller(CareerController::class)->group(function () {
    Route::get('/career', 'index')->name('karir');
});
Route::controller(PromoController::class)->group(function () {
    Route::get('/promo', 'index')->name('promo');
    Route::get('/promo/{slug}', 'show')->name('promo.show');
});

route::view('/contact','contact')->name('kontak');
route::view('/faq','faq')->name('FAQ');
route::view('/privacy-policy','privacy')->name('policy');
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::fallback(function () {
    return view('errors.404');
});

Route::get('slug', function () {

    $mdY = slug('makan ayam');
    var_dump($mdY);
});


require __DIR__ . '/auth.php';
