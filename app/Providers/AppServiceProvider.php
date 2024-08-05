<?php

namespace App\Providers;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureFormFilled;
use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\ClearContractSession;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app['router']->aliasMiddleware('clear.contract.session', ClearContractSession::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
