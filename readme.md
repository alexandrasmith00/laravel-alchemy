1.  Use composer to download (not sure?)
2.  Add service provider
3.  Add alias
4. 	Publish config file -- set API key and base url if different
5.  List of commands:


# AWS Service Provider for Laravel 5

[![@awsforphp on Twitter](http://img.shields.io/badge/twitter-%40awsforphp-blue.svg?style=flat)](https://twitter.com/awsforphp)
[![Build Status](https://img.shields.io/travis/aws/aws-sdk-php-laravel.svg)](https://travis-ci.org/aws/aws-sdk-php-laravel)
[![Latest Stable Version](https://img.shields.io/packagist/v/aws/aws-sdk-php-laravel.svg)](https://packagist.org/packages/aws/aws-sdk-php-laravel)
[![Total Downloads](https://img.shields.io/packagist/dt/aws/aws-sdk-php-laravel.svg)](https://packagist.org/packages/aws/aws-sdk-php-laravel)
[![Gitter](https://badges.gitter.im/Join Chat.svg)](https://gitter.im/aws/aws-sdk-php?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

This is a [Laravel](http://laravel.com/) service provider for making it easy to include the 
[Alchemy API for PHP](https://github.com/AlchemyAPI/alchemyapi_php) in a Laravel application.



## Installation

The Alchemy Service Provider can be installed via [Composer](http://getcomposer.org) by requiring the
`lexismith/laravel-alchemy` package in your project's `composer.json`.

```json
{
    "require": {
				"lexismith/laravel-alchemy": "dev-master"
    }
}
```

Then run a composer update
```sh
php composer.phar update
```

To use the Alchemy Service Provider, you must register the provider when bootstrapping your Laravel application.

Find the `providers` key in your `config/app.php` and register the service provider.

```php
    'providers' => array(
        // ...
    		'LexiSmith\LaravelAlchemy\AlchemyServiceProvider',
    )
```

    	

Find the `aliases` key in your `config/app.php` and add the Alchemy facade alias.

```php
    'aliases' => array(
        // ...
        'Alchemy' 	=> 'LexiSmith\LaravelAlchemy\AlchemyFacade',
    )
```

## Configuration

By default, the package uses the following environment variables to auto-configure the plugin without modification:
```
API_KEY
BASE_URL
```

To customize the configuration file, publish the package configuration using Artisan.

```sh
php artisan vendor:publish
```

Update your settings in the generated `app/config/alchemy.php` configuration file or by editing your environment variables accordingly in  `.env`

```php
return [
    'url' => env('ALCHEMY_URL', 'http://access.alchemyapi.com/calls'),
	  'key' => env('ALCHEMY_API_KEY')
];
```

## Usage

In order to use Alchemy API, you must first declare an instance.



## Links
<!--

* [AWS SDK for PHP on Github](http://github.com/aws/aws-sdk-php/)
* [AWS SDK for PHP website](http://aws.amazon.com/sdkforphp/)
* [AWS on Packagist](https://packagist.org/packages/aws/)
* [License](http://aws.amazon.com/apache2.0/)
-->
* [Laravel website](http://laravel.com/)