<?php

/*
 * This file is part of OpenExchangeRates PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\OpenExchangeRates\API;

class Currencies extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function all(array $parameters = []): HttpResponse
    {
        return $this->client->get('currencies.json', $parameters);
    }

    /**
     * @param float  $value
     * @param string $from
     * @param string $to
     * @param array  $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function convert(float $value, string $from, string $to, array $parameters = []): HttpResponse
    {
        return $this->client->get("convert/{$value}/{$from}/{$to}", $parameters);
    }
}
