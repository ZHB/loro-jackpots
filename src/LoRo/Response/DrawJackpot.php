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
 * @Serializer\XmlRoot("drawJackpots")
 */
class DrawJackpot extends AbstractResponse
{
    /**
     * @var int
     *
     * @Serializer\SerializedName("gameId")
     * @Serializer\Type("int")
     */
    private $gameId;

    /**
     * @var string
     *
     * @Serializer\SerializedName("gameName")
     * @Serializer\Type("string")
     */
    private $gameName;

    /**
     * @var int
     *
     * @Serializer\SerializedName("drawNumber")
     * @Serializer\Type("int")
     */
    private $drawNumber;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("wagerClosingTime")
     * @Serializer\Type("datetime")
     */
    private $wagerClosingTime;

    /**
     * @var \DateTime
     *
     * @Serializer\SerializedName("drawDate")
     * @Serializer\Type("datetime")
     */
    private $drawDate;

    /**
     * @var int
     *
     * @Serializer\SerializedName("estimatedJackpot")
     * @Serializer\Type("int")
     */
    private $estimatedJackpot;

    /**
     * @var string
     *
     * @Serializer\SerializedName("currency")
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute()
     */
    private $currency;

    /**
     * @var string
     *
     * @Serializer\SerializedName("timezone")
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute()
     */
    private $timezone;

    /**
     * @return int
     */
    public function getGameId(): int
    {
        return $this->gameId;
    }

    /**
     * @param int $gameId
     */
    public function setGameId(int $gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * @return string
     */
    public function getGameName(): string
    {
        return $this->gameName;
    }

    /**
     * @param string $gameName
     */
    public function setGameName(string $gameName)
    {
        $this->gameName = $gameName;
    }

    /**
     * @return int
     */
    public function getDrawNumber(): int
    {
        return $this->drawNumber;
    }

    /**
     * @param int $drawNumber
     */
    public function setDrawNumber(int $drawNumber)
    {
        $this->drawNumber = $drawNumber;
    }

    /**
     * @return \DateTime
     */
    public function getWagerClosingTime(): \DateTime
    {
        return $this->wagerClosingTime;
    }

    /**
     * @param \DateTime $wagerClosingTime
     */
    public function setWagerClosingTime(\DateTime $wagerClosingTime)
    {
        $this->wagerClosingTime = $wagerClosingTime;
    }

    /**
     * @return \DateTime
     */
    public function getDrawDate(): \DateTime
    {
        return $this->drawDate;
    }

    /**
     * @param \DateTime $drawDate
     */
    public function setDrawDate(\DateTime $drawDate)
    {
        $this->drawDate = $drawDate;
    }

    /**
     * @return int
     */
    public function getEstimatedJackpot(): int
    {
        return $this->estimatedJackpot;
    }

    /**
     * @param int $estimatedJackpot
     */
    public function setEstimatedJackpot(int $estimatedJackpot)
    {
        $this->estimatedJackpot = $estimatedJackpot;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getTimezone(): string
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     */
    public function setTimezone(string $timezone)
    {
        $this->timezone = $timezone;
    }
}
