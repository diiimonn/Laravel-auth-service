<?php

namespace diiimonn\LaravelVerificationService;

use Illuminate\Support\ServiceProvider;

/**
 * Class VerificationServiceProvider
 * @package diiimonn\LaravelVerificationService
 */
class VerificationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/ds-auth.php' => config_path('ds-auth.php'),
        ]);

        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/ds-auth.php', 'ds-auth'
        );
    }
}
