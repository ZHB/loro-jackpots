<?php

/*
 * This file is part of the LoRo Jackpots package.
 *
 * (c) Digital-link.ch <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\LoRo\Tests;

use PHPUnit\Framework\TestCase;
use Zhb\LoRo\AbstractResponse;
use Zhb\LoRo\Request\DrawJackpotRequest;

class DrawJackpotRequestTest extends TestCase
{
    public function testSuccessfulResponse()
    {
        $drawJackpotRequest = new DrawJackpotRequest();
        $response = $drawJackpotRequest->execute();

        $this->assertInstanceOf(AbstractResponse::class, $response);
    }
}
