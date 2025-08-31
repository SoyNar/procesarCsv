<?php

namespace App\Providers;

use App\Domain\Repositories\ClienteRepositoryInterface;
use App\Domain\Repositories\SaldosRepositoryInterface;
use App\Infrastructure\Eloquent\EloquenClientRepositoryImpl;
use App\Infrastructure\Eloquent\ELoquenMoraRepositoryImpl;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ClienteRepositoryInterface::class,
            EloquenClientRepositoryImpl::class);
        $this->app->bind(SaldosRepositoryInterface::class,
            ELoquenMoraRepositoryImpl::class);
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
