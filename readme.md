# dblog

[![Latest Stable Version](https://poser.pugx.org/abhishekkrhaith11/dblog/version)](https://packagist.org/packages/abhishekkrhaith11/dblog)
[![Total Downloads](https://poser.pugx.org/abhishekkrhaith11/dblog/downloads)](https://packagist.org/packages/abhishekkrhaith11/dblog)
[![Latest Unstable Version](https://poser.pugx.org/abhishekkrhaith11/dblog/v/unstable)](//packagist.org/packages/abhishekkrhaith11/dblog)
[![License](https://poser.pugx.org/abhishekkrhaith11/dblog/license)](https://packagist.org/packages/abhishekkrhaith11/dblog)

This package will help to keep log in database with type for Laravel applications.

## Installation

Via Composer

``` bash
$ composer require abhishekkrhaith11/dblog
```

## Usage

After installation you need to add the following line to config/app.php -

```
'providers' => [
	/*
     * Package Service Providers...
     */
    Abhishekkrhaith11\Dblog\DblogServiceProvider::class,
]
```

If you want to use alias add the following -

```
'aliases' => [
	/*
     * Package Facades...
     */
    'Dblog' => Abhishekkrhaith11\Dblog\Facades\Dblog::class,
]
```

After setup you need migrate the database using

``` bash
$ php artisan migrate
```

You can change the database table name before migration. For that you have to publish configs. use -

``` bash
$ php artisan vendor:publish --provider=Abhishekkrhaith11\Dblog\DblogServiceProvider
```

## Documentation

Available log methods -
```
Dblog::emergency(string $msg);
Dblog::alert(string $msg);
Dblog::critical(string $msg);
Dblog::error(string $msg);
Dblog::warning(string $msg);
Dblog::notice(string $msg);
Dblog::info(string $msg);
Dblog::debug(string $msg);
```

To retrive logs use -
```
Dblog::logs(string $type);
```
This will return a array of all logs found in log table. Each log will contain log type, message and log time.

## Support

If you found any issues you can report in github issues.

## License

MIT. Please see the [license file](license.md) for more information.
