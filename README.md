# Laravel Country Flags

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-tests]][link-actions]
[![Total Downloads][ico-downloads]][link-downloads]

A Laravel wrapper for the [stidges/country-flags](https://github.com/stidges/country-flags) package.

## Installation

You can install the package via Composer:

``` bash
$ composer require stidges/laravel-country-flags
```

The Laravel facade and service provider are registered through auto-discovery, so you can start using it out of the box!

## Usage

This package publishes a Laravel facade for easier usage:

``` php
use CountryFlag;

echo CountryFlag::get('NL'); // "🇳🇱"
```

It also comes with a helper function that you can use!

``` php
echo country_flag('NL'); // "🇳🇱"
```

## Aliasing

If you would like to make country codes available under a custom aliases, you can update the configuration file. First you should publish it:

``` bash
$ php artisan vendor:publish --provider="Stidges\LaravelCountryFlags\CountryFlagsServiceProvider"
```

This will make the configuration file available under `config/country-flags.php`. You can update the `'aliases'` section to add your custom aliases:

``` php
return [
    'aliases' => [
        'AA' => 'NL',
    ],
];
```

And it will be available for you to access:

``` php
echo country_flag('AA'); // "🇳🇱"
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email info@stidges.com instead of using the issue tracker.

## Credits

- [Stidges][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/stidges/laravel-country-flags.svg
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg
[ico-tests]: https://github.com/stidges/laravel-country-flags/workflows/Tests/badge.svg
[ico-downloads]: https://img.shields.io/packagist/dt/stidges/laravel-country-flags.svg

[link-packagist]: https://packagist.org/packages/stidges/laravel-country-flags
[link-actions]: https://github.com/stidges/laravel-country-flags/actions
[link-downloads]: https://packagist.org/packages/stidges/laravel-country-flags
[link-author]: https://github.com/stidges
[link-contributors]: ../../contributors
