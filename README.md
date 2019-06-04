# Laravel Database

[![Build Status](https://img.shields.io/travis/artisanry/Database/master.svg?style=flat-square)](https://travis-ci.org/artisanry/Database)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/artisanry/database.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/artisanry/Database.svg?style=flat-square)](https://github.com/artisanry/Database/releases)
[![License](https://img.shields.io/packagist/l/artisanry/Database.svg?style=flat-square)](https://packagist.org/packages/artisanry/Database)

## Installation

First, pull in the package through Composer.

```js
composer require artisanry/database:1.0.*@dev
```

And then include the service provider within `app/config/app.php`.

```php
Artisanry\Database\ServiceProvider::class
```

## Base Classes

All classes that are prefixed with `Base` are `Boilerplate`-classes that extend an `Abstract`-class and include some `Traits` that are commonly used. So the `Base`-classes can be used to prevent building a `BaseRepository`, `BasePresenter` or whatever for each project.

## To-Do

- Update DocBlocks
- Add documentation for Traits

## Credits

- Slug & CountCache Behaviours taken from [kirkbushell/eloquence](https://github.com/kirkbushell/eloquence)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ phpunit
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
