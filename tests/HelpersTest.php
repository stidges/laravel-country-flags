<?php

namespace Stidges\Tests;

use Illuminate\Support\Facades\Facade;
use PHPUnit\Framework\TestCase;
use Stidges\CountryFlags\CountryFlag;

class HelpersTest extends TestCase
{
    /** @test */
    public function it_registers_a_helper_function_to_access_country_flags()
    {
        Facade::setFacadeApplication([
            'country-flag' => new CountryFlag,
        ]);

        $result = country_flag('NL');

        $this->assertEquals('🇳🇱', $result);
    }
}
