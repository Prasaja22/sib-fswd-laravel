<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/home', function() {
    return view('home');
});


Route::get('/', [LandingController::class, 'index']);

Route::get('/products', [ItemsController::class, 'index'])->middleware('auth');
Route::post('/add-product', [ItemsController::class, 'store'])->middleware('auth');
Route::put('/edit-product', [ItemsController::class, 'update'])->middleware('auth');
Route::delete('/hapus-product', [ItemsController::class, 'destroy'])->middleware('auth');




Route::get('/customer', [CustomerController::class, 'index'])->middleware('auth');
Route::put('/edit-customer', [CustomerController::class, 'update'])->middleware('auth');

Route::get('/kategory', [KategoriController::class, 'index'])->middleware('auth');
Route::post('/add-kategori', [KategoriController::class, 'store'])->middleware('auth');
Route::put('/edit-kategori', [KategoriController::class, 'update'])->middleware('auth');
Route::delete('/hapus-kategori', [KategoriController::class, 'destroy'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-user', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'destroy']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register-user', [RegisterController::class, 'store']);

