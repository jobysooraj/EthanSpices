<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'user-access:Admin','NoBackAfterLogout'])->group(function () {
  
    Route::get('/admin/home', [DashboardController::class, 'index'])->name('admin.home');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    
    Route::get('products/import', [ProductImportController::class, 'showForm']);
    Route::post('products/import', [ProductImportController::class, 'import'])->name('products.import');
    Route::resource('coupons', CouponController::class);
    Route::resource('orders', OrderController::class);

});



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
