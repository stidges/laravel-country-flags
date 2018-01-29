<?php

use Stidges\LaravelCountryFlags\CountryFlagFacade as CountryFlag;

if (! function_exists('country_flag')) {
    /**
     * Get the emoji country flag for the given country code.
     *
     * @param  string  $countryCode
     * @return string
     */
    function country_flag($countryCode)
    {
        return CountryFlag::get($countryCode);
    }
}
