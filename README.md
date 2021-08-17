# laravel-mongo-notifiable

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

A trait will help you connect to mongodb and do notification

## Install

Via Composer

``` bash
$ composer require boytunghc/laravel-mongo-notifiable
```

## Usage

On your model

``` php
use Alexzvn\LaravelMongoNotifiable\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
}
```

## Security

If you discover any security related issues, please email boytunghc@gmail.com instead of using the issue tracker.

## Credits

- [Alex][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/alexzvn/laravel-mongo-notifiable.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/alexzvn/laravel-mongo-notifiable.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/alexzvn/laravel-mongo-notifiable.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/alexzvn/laravel-mongo-notifiable.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/alexzvn/laravel-mongo-notifiable
[link-downloads]: https://packagist.org/packages/alexzvn/laravel-mongo-notifiable
[link-author]: https://github.com/alexzvn
[link-contributors]: ../../contributors
