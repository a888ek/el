<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ChaletController;
use App\Http\Controllers\Index2Controller;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;




Route::resource('/', IndexController::class);
Route::get('/customer/{id}', [CustomerController::class, 'show'])->name('customer.show');
Route::post('/customer/{id}', [CustomerController::class, 'create'])->name('customer.create');
Route::post('/customer/ratings/{id}', [CustomerController::class, 'store'])->name('customer.store');



Route::resource('/contact', ContactController::class);

Route::resource('/index', IndexController::class);
Route::get('/about', [IndexController::class, 'about'])->name('about.index');
Route::get('/chalet', [IndexController::class, 'ss'])->name('chalet.index');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact.index');

Route::resource('/chalets', ChaletController::class);

Route::get('/chalets/{id}', [ChaletController::class, 'show'])->name('chalets.show');
Route::post('/chalets/{id}/booking', [BookingController::class, 'store'])->name('booking.store');






