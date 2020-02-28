<?php

namespace Elbgoods\LaravelSortPositionsValidation;

use Illuminate\Support\ServiceProvider;

class LaravelSortPositionsValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/sortPositionsRule'),
        ], 'lang');

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang/', 'sortPositionsRule');
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
    }
}
