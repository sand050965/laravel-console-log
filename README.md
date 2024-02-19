# laravel-console-log

![Packagist Version](https://img.shields.io/packagist/v/sand/laravel-console-log)
![Packagist Downloads](https://img.shields.io/packagist/dt/sand/laravel-console-log)
![GitHub License](https://img.shields.io/github/license/sand050965/laravel-console-log)
![GitHub Repo stars](https://img.shields.io/github/stars/sand050965/laravel-console-log)


This package lets backend developers easily print messages and values in terminal. This is the php version of console log for Laravel.

Compatible with Laravel v5.3+.

_P.S. If you have any useful idea for Laravel Console Log, which is not presented here, feel free to add it to our collection, we appreciate your support and gladly merge it 🥰_

## Installation

You can install the package via composer:

```bash
composer require sand/laravel-console-log
```

### Laravel 5.5+

The package will automatically register itself, so you don't need to do anything else.

### Laravel 5.4

Add this entry to `providers` array in your `config/app.php` file.

```php
Sand\LaravelConsoleLog\LaravelConsoleLogServiceProvider::class
```

```php
'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        ...
        Sand\LaravelConsoleLog\LaravelConsoleLogServiceProvider::class
        ...
    ],
```

## Available function

-   [`log`](###log)

### `log`

Check is passed parameter empty, and if not, adds `where` condition on `$column` to exiting query.
Useful when you have complex query, with a lot of constructions like

##### Signature:

```php
Console::log($param);
```

##### Example:

```diff
$var = 'Hello World!';

- file_put_contents($logPath, var_export($variable, TRUE) . "\n\n");

+ Console::log($var);
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email sand050965@gmail.com instead of using the issue tracker.

## Credits

-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.