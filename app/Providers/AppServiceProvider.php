<?php

namespace App\Providers;

use App\Repositories\DeveloperRepository;
use App\Repositories\DeveloperRepositoryInterface;
use App\Repositories\TaskRepository;
use App\Repositories\TaskRepositoryInterface;
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

        $this->app->bind(TaskRepositoryInterface::class, TaskRepository::class);
        $this->app->bind(DeveloperRepositoryInterface::class, DeveloperRepository::class);
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
