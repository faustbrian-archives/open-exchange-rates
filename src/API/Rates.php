<?php

declare(strict_types=1);

/*
 * This file is part of OpenExchangeRates PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\OpenExchangeRates\API;

class Rates extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function latest(array $parameters = []): HttpResponse
    {
        return $this->client->get('latest.json', $parameters);
    }

    /**
     * @param string $date
     * @param array  $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function historical(string $date, array $parameters = []): HttpResponse
    {
        return $this->client->get("historical/{$date}.json", $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function timeSeries(array $parameters): HttpResponse
    {
        return $this->client->get('time-series.json', $parameters);
    }
}
