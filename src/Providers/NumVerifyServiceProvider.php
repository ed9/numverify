<?php

declare(strict_types=1);

namespace Ed90\Services\NumVerify\Providers;

use Ed90\Services\NumVerify\NumVerify;
use Illuminate\Support\ServiceProvider;

class NumVerifyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/numverify.php', 'numverify');

        $this->app->singleton('numverify', function ($app) {
            return new NumVerify;
        });
    }

    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../../config/numverify.php' => config_path('numverify.php'),
        ], 'config');
    }
}
