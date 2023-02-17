<?php

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

Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'store']);
Route::delete('/delete-product/{id?}', [App\Http\Controllers\ProductController::class, 'destroy']);
Route::get('/product/{id?}', [App\Http\Controllers\ProductController::class, 'show']);
Route::get('/edit-product/{id?}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/update-product/{id?}', [App\Http\Controllers\ProductController::class, 'update']);
Route::get('/buy-product/{id?}', [App\Http\Controllers\ProductController::class, 'buyProduct']);
Route::get('/dashboard', [App\Http\Controllers\ProductController::class, 'dashboard']);

