<?php

/*
 * This file is part of the LoRo Jackpots package.
 *
 * (c) Digital-link.ch <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Zhb\LoRo\Request\DrawJackpotRequest;

require_once __DIR__.'/../vendor/autoload.php';

$request = new DrawJackpotRequest();

try {
    $jackpots = $request->execute();

    /** @var \Zhb\LoRo\Response\DrawJackpot $jackpot */
    foreach ($jackpots->getDrawJackpots() as $jackpot) {
        var_dump($jackpot);
    }
} catch (\Zhb\LoRo\Exception\HttpRequestException $e) {
}
