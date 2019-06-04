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

use Plients\Http\HttpResponse;

class Statistics extends AbstractAPI
{
    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function usage(array $parameters = []): HttpResponse
    {
        return $this->client->get('usage.json', $parameters);
    }
}
