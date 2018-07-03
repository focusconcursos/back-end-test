<?php

namespace App\Providers;

use App\Domain\Freight\CalculoCorreiosFrete;
use App\Domain\Freight\Interfaces\ICalculateFreight;
use Illuminate\Support\ServiceProvider;

class ApplicationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ICalculateFreight::class, CalculoCorreiosFrete::class);
    }
}
