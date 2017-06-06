<?php

/*
 * This file is part of OpenExchangeRates PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\OpenExchangeRates;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\OpenExchangeRates\Request\Modifiers\AppIdModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_uri' => 'https://openexchangerates.org/api/',
        'headers' => [
           'User-Agent' => 'BrianFaust/OpenExchangeRates',
        ],
    ];

    protected $requestModifiers = [AppIdModifier::class];

    protected function buildRequestUri($baseUri, $path)
    {
        return $baseUri.$path.'.json';
    }
}
