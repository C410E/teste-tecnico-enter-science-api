<?php

namespace App\Providers;

use App\Repositories\ArtistRepository;
use App\Repositories\Interfaces\ArtistRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->registerSingletons();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    private function registerSingletons(): void
    {
        $this->app->singleton(ArtistRepositoryInterface::class, ArtistRepository::class);
    }
}
