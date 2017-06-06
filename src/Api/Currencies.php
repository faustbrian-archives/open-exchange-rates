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

class Currencies extends AbstractApi
{
    public function all(array $parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get('currencies');

        return $this->hydrateOne($response);
    }

    public function convert($value, $from, $to, array $parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get("convert/$value/$from/$to");

        return $this->hydrateOne($response);
    }
}
