<?php

/*
 * This file is part of OpenExchangeRates PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\OpenExchangeRates\Request\Modifiers;

use BrianFaust\Contracts\HttpClient;
use BrianFaust\Modifiers\AbstractModifier;

class AppIdModifier extends AbstractModifier
{
    public function apply()
    {
        $appId = $this->httpClient->getConfig('appId');

        $this->httpClient->addQuery('app_id', $appId);

        return $this->httpClient;
    }
}
