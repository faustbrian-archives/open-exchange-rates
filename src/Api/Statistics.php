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

class Statistics extends AbstractApi
{
    public function usage(array $parameters = [])
    {
        $this->setQuery($parameters);

        $response = $this->get('usage');

        return $this->hydrateOne($response);
    }
}
