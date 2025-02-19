<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\CategoryRepository;
use App\Repositories\GstTaxRepository;
use App\Repositories\GstTaxRepositoryInterface;
use App\Repositories\UnitRepository;
use App\Repositories\UnitRepositoryInterface;
use App\Repositories\SupplierRepository;
use App\Repositories\SupplierRepositoryInterface;
use App\Repositories\DiscountRepositoryInterface;
use App\Repositories\DiscountRepository;
use App\Repositories\PromocodeRepositoryInterface;
use App\Repositories\PromocodeRepository;
use App\Repositories\ProductRepositoryInterface;
use App\Repositories\ProductRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(GstTaxRepositoryInterface::class, GstTaxRepository::class);
        $this->app->bind(UnitRepositoryInterface::class, UnitRepository::class);
        $this->app->bind(SupplierRepositoryInterface::class, SupplierRepository::class);
        $this->app->bind(DiscountRepositoryInterface::class, DiscountRepository::class);
        $this->app->bind(PromocodeRepositoryInterface::class, PromocodeRepository::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
