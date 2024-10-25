<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\PizzaRepositoryInterface;
use App\Repositories\PizzaRepository;
use App\Services\PizzaService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PizzaRepositoryInterface::class, PizzaRepository::class);
        $this->app->bind(PizzaService::class, function ($app) {
            return new PizzaService($app->make(PizzaRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
