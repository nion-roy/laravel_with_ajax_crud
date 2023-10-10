<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackendController;
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

Route::get('/', function () {
	return view('welcome');
});


Route::get('/dashboard', [BackendController::class, 'index'])->name('backend.index');
Route::post('/add-product', [ProductController::class, 'store']);
Route::post('/update-product/{id}', [ProductController::class, 'update']);
Route::get('/show-product', [ProductController::class, 'show']);
Route::get('/delete-product/{id}', [ProductController::class, 'destroy']);
Route::get('/active-product/{id}', [ProductController::class, 'isActive']);
Route::get('/inactive-product/{id}', [ProductController::class, 'inActive']);
Route::get('/edit-product/{id}', [ProductController::class, 'edit']);
