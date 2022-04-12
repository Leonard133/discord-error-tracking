#  A package that send alert to discord when an error happen.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/leonard133/discord-error-tracking.svg?style=flat-square)](https://packagist.org/packages/leonard133/discord-error-tracking)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/leonard133/discord-error-tracking/run-tests?label=tests)](https://github.com/leonard133/discord-error-tracking/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/leonard133/discord-error-tracking/Check%20&%20fix%20styling?label=code%20style)](https://github.com/leonard133/discord-error-tracking/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/leonard133/discord-error-tracking.svg?style=flat-square)](https://packagist.org/packages/leonard133/discord-error-tracking)


## Installation

You can install the package via composer:

```bash
composer require leonard133/discord-error-tracking
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="discord-error-tracking-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="discord-error-tracking-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="discord-error-tracking-views"
```

## Usage

```php
WIP

```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Leonard Lee](https://github.com/Leonard133)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
