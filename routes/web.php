<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminHome;
use App\Http\Controllers\Website\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::name('website')->group(function(){
        Route::get('/', [HomeController::class, 'index'])->name('website.index');
});
Route::name('admin')->group(function(){
    Route::get('login', [AdminHome::class, 'index'])->name('home');
    Route::get('admin-home', [AdminHome::class, 'index'])->name('home');
});