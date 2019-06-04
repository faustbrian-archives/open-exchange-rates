# OpenExchangeRates PHP Client

[![Build Status](https://img.shields.io/travis/plients/OpenExchangeRates-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/OpenExchangeRates-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/openexchangerates.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/OpenExchangeRates-PHP-Client.svg?style=flat-square)](https://github.com/plients/OpenExchangeRates-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/OpenExchangeRates-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/OpenExchangeRates-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require plients/open-exchange-rates
```

## Usage

``` php
<?php

use Plients\Config;

$client = new Plients\OpenExchangeRates\Client();
$client->setConfig(new Config(['appId' => 'your-app-id']));

print_r($client->api('Rates')->latest());
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://basecode.sh)
