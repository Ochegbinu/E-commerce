<?php

use App\Http\Controllers\CategorysController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/all-categories', [CategorysController::class, 'index'])->name('allCategory');
Route::get('/destroy-category/{id}', [CategorysController::class, 'destroy'])->name('destroyCategory');
Route::get('/create-category', [CategorysController::class, 'create'])->name('createCategory');
Route::post('/create-category', [CategorysController::class, 'store'])->name('storeCategory');

