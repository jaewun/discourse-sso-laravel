# discourse-sso-laravel

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

A simple Discourse SSO integration for Laravel 5.1.
The goal of this project is help users get SSO up and working on Laravel with as little hassles as possible.

# This Project Is Abandoned

This project is no longer maintained. I recommend using [spinen/laravel-discourse-sso](https://packagist.org/packages/spinen/laravel-discourse-sso)

## Warning

As per Discourse's SSO Guide...

> Discourse uses emails to map external users to Discourse users, and assumes that external emails are secure.
> IF YOU DO NOT VALIDATE EMAIL ADDRESSES BEFORE SENDING THEM TO DISCOURSE, YOUR SITE WILL BE EXTREMELY VULNERABLE!

## Installation for Laravel 5.*

Via Composer

``` bash
$ composer require jaewun/discourse-sso-laravel
```

After updating composer, add the ServiceProvider to the providers array in config/app.php

```
jaewun\DiscourseSSOLaravel\SSOServiceProvider::class,
```

You'll also need to configure SSO to ensure it's passing the correct information to Discourse

```
php artisan vendor:publish
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Security

If you discover any security related issues, please email jaewun@me.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jaewun/discourse-sso-laravel.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jaewun/discourse-sso-laravel.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jaewun/discourse-sso-laravel
[link-downloads]: https://packagist.org/packages/jaewun/discourse-sso-laravel
[link-author]: https://github.com/jaewun
