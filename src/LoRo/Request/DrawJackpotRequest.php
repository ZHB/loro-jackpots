<?php

/*
 * This file is part of the LoRo Jackpots package.
 *
 * (c) Digital-link.ch <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\LoRo\Request;

use Zhb\LoRo\AbstractRequest;

class DrawJackpotRequest extends AbstractRequest
{
    const METHOD = 'GET';

    const API_PATH = 'games/jackpots';

    const RESPONSE_CLASS = 'Zhb\LoRo\Response\DrawJackpotCollection';
}
