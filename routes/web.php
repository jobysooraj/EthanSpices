<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminHome;
use App\Http\Controllers\Website\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin-home', [AdminHome::class, 'index'])->name('home');
Route::name('website')->group(function(){
        Route::get('home', [HomeController::class, 'index'])->name('website.index');
});