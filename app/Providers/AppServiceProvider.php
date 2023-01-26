<?php

namespace App\Providers;

use App\Utils\Task\Providers\ProviderOne;
use App\Utils\Task\Providers\ProviderTwo;
use App\Utils\Task\TaskProviderManager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(TaskProviderManager::class, function () {
            return new TaskProviderManager([
                $this->app->make(ProviderOne::class),
                $this->app->make(ProviderTwo::class),
            ]);
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
