<?php

namespace Acaronlex\LaravelCalendar;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class ServiceProvider
 *
 * @package Acaronlex\LaravelCalendar
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('laravel-calendar', function ($app) {
            return $app->make('Acaronlex\LaravelCalendar\Calendar');
        });
    }

    /**
     * @return void
     */
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'/views/', 'laravel-calendar');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['laravel-calendar'];
    }
}
