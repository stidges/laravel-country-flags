<?php

namespace Stidges\LaravelCountryFlags;

use Illuminate\Support\ServiceProvider;
use Stidges\CountryFlags\CountryFlag;

class CountryFlagsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/country-flags.php' => config_path('country-flags.php'),
        ], 'config');

        $this->app->bind(CountryFlag::class, function () {
            return new CountryFlag(config('country-flags.aliases'));
        });

        $this->app->singleton('country-flag', CountryFlag::class);
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/country-flags.php', 'country-flags');
    }
}
