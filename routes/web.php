<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/profile', [ProfileController::class, 'profile'])->middleware(['auth', 'verified'])->name('profile');
Route::get('/product/{product_id}', [HomeController::class, 'product'])->name('product')->middleware(['auth', 'verified']);
Route::get('/catalog', [HomeController::class, 'catalog'])->name('catalog');
Route::post('/profile/edit', [ProfileController::class, 'edit_profile'])->middleware(['auth', 'verified'])->name('editProfile');
Route::post('/search', [HomeController::class, 'search'])->name('Search');
Route::get('/admin', [AdminController::class, 'index'])->name('Admin')->middleware([IsAdmin::class]);
Route::post('/admin/position/add', [AdminController::class, 'new_product'])->name('NewPosition')->middleware([IsAdmin::class]);
Route::get('/admin/delete/{product_id}', [AdminController::class, 'delete_product'])->name('DeleteProduct')->middleware([IsAdmin::class]);
Route::post('/validate', [HomeController::class, 'validate'])->name('Validate');

require __DIR__.'/auth.php';
