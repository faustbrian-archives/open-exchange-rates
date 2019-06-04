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

namespace Plients\OpenExchangeRates;

use Plients\Http\Http;

class Client
{
    /**
     * @var string
     */
    private $app;

    /**
     * Create a new OpenExchangeRates Client instance.
     *
     * @param string $app
     */
    public function __construct(string $app)
    {
        $this->app = $app;
    }

    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\OpenExchangeRates\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri("https://openexchangerates.org/api/?app_id={$this->app}");

        $class = "Plients\\OpenExchangeRates\\API\\{$name}";

        return new $class($client);
    }
}
