<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'create'])->name('all');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/all-categories', [CategorysController::class, 'index'])->name('allCategory');
Route::get('/destroy-category/{id}', [CategorysController::class, 'destroy'])->name('destroyCategory');
Route::get('/create-category', [CategorysController::class, 'create'])->name('createCategory');
Route::post('/create-category', [CategorysController::class, 'store'])->name('storeCategory');


Route::get('/all-products', [ProductsController::class, 'index'])->name('allProduct');
Route::get('/create-product', [ProductsController::class, 'create'])->name('createProduct');
Route::post('/create-product', [ProductsController::class, 'store'])->name('storeProduct');
Route::get('/destroy-products/{id}', [ProductsController::class, 'destroy'])->name('destroyProduct');


Route::get('/add-cart/{id}', [CartsController::class, 'show'])->name('cart');
Route::get('/my-cart', [CartsController::class, 'index'])->name('myCart');
Route::get('/remove-cart/{id}', [CartsController::class, 'destroy'])->name('removeCart');


// Laravel 8 & 9
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');











