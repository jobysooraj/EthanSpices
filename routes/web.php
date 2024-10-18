<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminHome;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\ShopByController;
use App\Http\Controllers\Website\BulkOrderController;
use App\Http\Controllers\Website\AboutUsController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('website')->group(function(){
   // Fix the home route
Route::get('/', [HomeController::class, 'index'])->name('login');
Route::get('/shop-by', [ShopByController::class, 'index'])->name('shopBy');
Route::get('/bulk-order', [BulkOrderController::class, 'index'])->name('bulkOrder');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutUs');

});
Route::name('admin')->group(function(){
    Route::get('login', [AdminHome::class, 'index'])->name('home');
    Route::get('admin-home', [AdminHome::class, 'index'])->name('adminHome');
});