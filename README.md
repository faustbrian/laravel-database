# Laravel Database

## Installation

First, pull in the package through Composer.

```js
composer require draperstudio/laravel-database:1.0.*@dev
```

And then include the service provider within `app/config/app.php`.

```php
'providers' => [
    DraperStudio\Database\ServiceProvider::class
];
```

## Base Classes

All classes that are prefixed with `Base` are `Boilerplate`-classes that extend an `Abstract`-class and include some `Traits` that are commonly used. So the `Base`-classes can be used to prevent building a `BaseRepository`, `BasePresenter` or whatever for each project.

## To-Do

- Update DocBlocks
- Add documentation for Traits

## Credits

- Slug & CountCache Behaviours taken from [kirkbushell/eloquence](https://github.com/kirkbushell/eloquence)
