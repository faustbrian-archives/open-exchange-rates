<?php

/*
 * This file is part of OpenExchangeRates PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\OpenExchangeRates\Api;

use BrianFaust\Unified\AbstractApi;

class Rates extends AbstractApi
{
    public function latest(array $parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get('latest');

        return $this->hydrateOne($response);
    }

    public function historical($date, array $parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get("historical/$date");

        return $this->hydrateOne($response);
    }

    public function timeSeries(array $parameters)
    {
        $this->setQuery($parameters);

        $response = $this->get('time-series');

        return $this->hydrateOne($response);
    }
}
