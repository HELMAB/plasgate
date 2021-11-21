# Plasgate SDK for Laravel

[comment]: <> ([![Latest Version on Packagist]&#40;https://img.shields.io/packagist/v/asorasoft/plasgate.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/asorasoft/plasgate&#41;)

[comment]: <> ([![Build Status]&#40;https://img.shields.io/travis/asorasoft/plasgate/master.svg?style=flat-square&#41;]&#40;https://travis-ci.org/asorasoft/plasgate&#41;)

[comment]: <> ([![Quality Score]&#40;https://img.shields.io/scrutinizer/g/asorasoft/plasgate.svg?style=flat-square&#41;]&#40;https://scrutinizer-ci.com/g/asorasoft/plasgate&#41;)

[comment]: <> ([![Total Downloads]&#40;https://img.shields.io/packagist/dt/asorasoft/plasgate.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/asorasoft/plasgate&#41;)

A simple PHP package for Plasgate SMS provider.

## Installation

You can install the package via composer:

```bash
composer require asorasoft/plasgate
```

Then add ``PlasgateServiceProvider`` class into `config/app.php`

``` php
return [
    "providers" => [
        Asorasoft\Plasgate\PlasgateServiceProvider::class,
    ]
];
```

## Usage
You need to publish the configuration files via command

``` bash
php artisan vendor:publish --provider="Asorasoft\Plasgate\PlasgateServiceProvider"
```

Need to change ``plasgate.php`` configuration such as `token`, `sender_Id` and `base_url`

``` php
use Asorasoft\Plasgate\Plasgate;

$plasgate = new Plasgate();
$response = $plasgate->send('phone', 'your_text_message'); // GuzzleHttp Response
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email mabhelitc@gmail.com instead of using the issue tracker.

## Credits

- [Mab Hel](https://github.com/asorasoft)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
