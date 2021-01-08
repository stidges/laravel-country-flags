<?php

namespace Stidges\Tests;

use Illuminate\Support\Facades\Facade;
use PHPUnit\Framework\TestCase;
use Stidges\CountryFlags\CountryFlag;
use Stidges\LaravelCountryFlags\CountryFlagFacade;

class CountryFlagFacadeTest extends TestCase
{
    /** @test */
    public function it_provides_a_laravel_facade()
    {
        Facade::setFacadeApplication([
            'country-flag' => new CountryFlag,
        ]);

        $result = CountryFlagFacade::get('NL');

        $this->assertEquals('🇳🇱', $result);
    }
}
