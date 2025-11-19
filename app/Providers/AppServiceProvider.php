<?php

namespace App\Providers;

use App\Http\Interfaces\BusCompanyRepositoryInterface;
use App\Http\Interfaces\CityRepositoryInterface;
use App\Http\Repositories\BusCompanyRepository;
use App\Http\Repositories\CityRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CityRepositoryInterface::class, CityRepository::class);
        $this->app->bind(BusCompanyRepositoryInterface::class, BusCompanyRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
