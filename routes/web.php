<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\Shoppingcart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use TCG\Voyager\Facades\Voyager;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();
// Route::get('qoyil', 'App\Http\Controllers\Shoppingcart@qoyil')->name('qoyil');
Route::get('/checkout', 'App\Http\Controllers\Shoppingcart@checkout')->name('checkout');
Route::post('/session', 'App\Http\Controllers\Shoppingcart@session')->name('session');
Route::get('/success', 'App\Http\Controllers\Shoppingcart@success')->name('success');

Route::get('orders',[OrderController::class, 'index'])->name('orders');
Route::get('/', [PageController::class, 'index']);
Route::get('services', [PageController::class, 'services'])->name('services');
Route::get('sdatails', [PageController::class, 'sdatails'])->name('sdatails');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('card', [PageController::class, 'card'])->name('card');
Route::get('projects', [PageController::class, 'projects'])->name('projects');
Route::get('projectDetails', [PageController::class, 'projectDetails'])->name('projectDetails');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('shop', [ShopController::class, 'index'])->name('shop');
Route::get('/{product}', [ShopController::class, 'show'])->name('products');

Route::get('/add-card/{product}', [\App\Http\Controllers\Productlist::class,'addToCart'])->name('add-card');
Route::get('/card',[Shoppingcart::class,'render'])->name('card');
Route::get('/incrementQty/{product}',[Shoppingcart::class,'incrementQty'])->name('incrementQty');
Route::get('/decrementQty/{product}',[Shoppingcart::class,'decrementQty'])->name('decrementQty');
Route::get('/removeItem/{product}',[Shoppingcart::class,'removeItem'])->name('removeItem');

// Route::get('/checkout', [Shoppingcart::class,'checkout'])->name('checkout');
// Route::post('/session', [Shoppingcart::class,'session'])->name('session');
// Route::get('/success', [Shoppingcart::class,'success'])->name('success');



// routes/web.php
Route::get('payment-cancel',[PaypalController::class,'cancel'])
    ->name('payment.cancel');
Route::get('payment-success',[PaypalController::class,'success'])
    ->name('payment.success');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
