<?php

/*
 * This file is part of the LoRo Jackpots package.
 *
 * (c) Digital-link.ch <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\LoRo\Response;

use JMS\Serializer\Annotation as Serializer;
use Zhb\LoRo\AbstractResponse;

/**
 * Class DrawJackpots.
 *
 * @Serializer\XmlRoot("drawJackpots")
 */
class DrawJackpotCollection extends AbstractResponse
{
    /**
     * @var DrawJackpot[]
     *
     * @Serializer\Type("array<Zhb\LoRo\Response\DrawJackpot>")
     * @Serializer\XmlList(inline=true, entry="drawJackpot")
     */
    private $drawJackpots;

    /**
     * @return DrawJackpot[]
     */
    public function getDrawJackpots(): array
    {
        return $this->drawJackpots;
    }

    /**
     * @param DrawJackpot[] $drawJackpots
     */
    public function setDrawJackpots(array $drawJackpots)
    {
        $this->drawJackpots = $drawJackpots;
    }
}
