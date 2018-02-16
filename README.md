# OpenExchangeRates PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/OpenExchangeRates-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/OpenExchangeRates-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/openexchangerates-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/OpenExchangeRates-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/OpenExchangeRates-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/OpenExchangeRates-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/OpenExchangeRates-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/open-exchange-rates-php-client
```

## Usage

``` php
<?php

use BrianFaust\Config;

$client = new BrianFaust\OpenExchangeRates\Client();
$client->setConfig(new Config(['appId' => 'your-app-id']));

print_r($client->api('Rates')->latest());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
