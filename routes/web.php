<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::resource('product_type', ProductTypeController::class)->middleware(['auth', 'verified']);
// Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);
Route::resource('product_types', ProductTypeController::class);
Route::resource('products', ProductController::class);
Route::get('/error', function () {
    return view('error_page');
})->name('error');
Route::get('/admin-dashboard', [AdminController::class, 'dashboard'])->middleware('is_admin');
require __DIR__.'/auth.php';
