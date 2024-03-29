<?php

namespace Stidges\Tests;

use Illuminate\Support\Facades\Facade;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\Test;
use Stidges\CountryFlags\CountryFlag;
use Stidges\LaravelCountryFlags\CountryFlagFacade;

class CountryFlagFacadeTest extends TestCase
{
    #[Test]
    public function it_provides_a_laravel_facade(): void
    {
        Facade::setFacadeApplication([
            'country-flag' => new CountryFlag,
        ]);

        $result = CountryFlagFacade::get('NL');

        $this->assertEquals('🇳🇱', $result);
    }
}
