# Aliyun Opensearch

Aliyun Opeansearch for Laravel 5

## Install

Via Composer

``` bash
$ composer require atan/opensearch
```

As with most Laravel 5 packages you'll then need to register the Opensearch service provider. To do that, head over your config/app.php file and add the following line into the providers array:

```bash
Atan\Opensearch\OpensearchServiceProvider::class,
```

Add the BootForm facade to the aliases array in config/app.php:

``` bash
'Opensearch' => Atan\Opensearch\Facades\Opensearch::class,
```

## Configuration

Publish all vendor assets

``` bash
php artisan vendor:publish
```

## Usage

``` php
$opensearch = Opensearch::connect();
$opensearch->setQueryString("default:'关键词'");
$opensearch->setFormat('json');

$result = $opensearch->search();
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
