<?php

namespace Stidges\LaravelCountryFlags;

use Illuminate\Support\Facades\Facade;

class CountryFlagFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'country-flag';
    }
}
