<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LandingController;
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


Route::get('/products', [ItemsController::class, 'index']);
Route::post('/add-product', [ItemsController::class, 'store']);
Route::put('/edit-product', [ItemsController::class, 'update']);
Route::delete('/hapus-product', [ItemsController::class, 'destroy']);

Route::get('/customer', [CustomerController::class, 'index']);
Route::put('/edit-customer', [CustomerController::class, 'update']);

Route::get('/kategory', [KategoriController::class, 'index']);
Route::post('/add-kategori', [KategoriController::class, 'store']);
Route::put('/edit-kategori', [KategoriController::class, 'update']);
Route::delete('/hapus-kategori', [KategoriController::class, 'destroy']);

