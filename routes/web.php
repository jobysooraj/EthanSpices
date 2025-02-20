<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TaxController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\PromocodeController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ComboController;

use App\Http\Controllers\Website\ShopByController;
use App\Http\Controllers\Website\BulkOrderController;
use App\Http\Controllers\Website\AboutUsController;
use App\Http\Controllers\Website\ContactUsController;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index']);

Route::middleware(['auth', 'user-access:Admin','NoBackAfterLogout'])->group(function () {
  
    Route::get('/admin/home', [DashboardController::class, 'index'])->name('admin.home');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::resource('taxes', TaxController::class);
    Route::resource('units', UnitController::class);
    Route::resource('suppliers', SupplierController::class);
    Route::resource('discounts', DiscountController::class);
    Route::resource('promocodes',PromocodeController::class);
    Route::resource('combos',ComboController::class);

    //Route::get('products/import', [ProductImportController::class, 'showForm']);
    // Route::post('products/import', [ProductImportController::class, 'import'])->name('products.import');
    // Route::resource('coupons', CouponController::class);
    // Route::resource('orders', OrderController::class);

});
Route::name('website')->group(function(){
    // Fix the home route
 Route::get('/', [HomeController::class, 'index'])->name('login');
 Route::get('/shop-by', [ShopByController::class, 'index'])->name('shopBy');
 Route::get('/bulk-order', [BulkOrderController::class, 'index'])->name('bulkOrder');
 Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutUs');
 Route::get('/shop-by-spices', [ShopByController::class, 'shopBySpices'])->name('shopBySpices');
 Route::get('/shop-by-tea', [ShopByController::class, 'shopByTea'])->name('shopByTea');
 Route::get('/shop-by-coffee', [ShopByController::class, 'shopByCoffee'])->name('shopByCoffee');
 Route::get('/product', [ShopByController::class, 'show'])->name('product');
 Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contactUs');
 
 });


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
