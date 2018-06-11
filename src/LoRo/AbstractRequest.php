<?php

/*
 * This file is part of the LoRo Jackpots package.
 *
 * (c) Digital-link.ch <vincent.huck.pro@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zhb\LoRo;

use Doctrine\Common\Annotations\AnnotationRegistry;
use GuzzleHttp\Client;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Zhb\LoRo\Exception\HttpRequestException;

abstract class AbstractRequest
{
    const BASE_URI = 'https://jeux.loro.ch/api/';

    /**
     * @var Client
     */
    private $client;

    /**
     * AbstractRequest constructor.
     */
    public function __construct(Client $client = null)
    {
        $this->setClient($client);
    }

    public function getClient(): Client
    {
        if (null === $this->client) {
            return new Client([
                'base_uri' => self::BASE_URI,
                'timeout' => 2.0,
            ]);
        }

        return $this->client;
    }

    /**
     * @param Client $client
     */
    public function setClient(?Client $client)
    {
        $this->client = $client;
    }

    public function execute(): AbstractResponse
    {
        try {
            $response = $this->getClient()->request(
                static::METHOD,
                $this->getUrl()
            );
        } catch (\Exception $e) {
            throw new HttpRequestException();
        }

        if (200 !== $response->getStatusCode()) {
            throw new HttpRequestException();
        }

        return $this->getSerializer()->deserialize($response->getBody()->getContents(), static::RESPONSE_CLASS, 'xml');
    }

    private function getUrl(): string
    {
        $baseUri = self::BASE_URI;

        return $baseUri.static::API_PATH;
    }

    private function getSerializer(): Serializer
    {
        AnnotationRegistry::registerLoader('class_exists');

        return SerializerBuilder::create()->build();
    }
}
