<?php

namespace Fixik\Geocode;

use GuzzleHttp\Client;

class IpGeocode
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var string API url
     */
    private $url = 'https://ipinfo.io/%s/json';

    /**
     * IpGeocode constructor.
     */
    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * Get info about ip address.
     *
     * @param $ip
     * @return array
     */
    public function get($ip): array
    {
        $url = $this->getUrl($ip);

        return $this->http('get', $url);
    }

    /**
     * Get url.
     *
     * @param $ip
     * @return string
     */
    protected function getUrl($ip): string
    {
        return sprintf($this->url, $ip);
    }

    /**
     * Get array from json.
     *
     * @param $response
     * @return array
     */
    protected function responseToJson($response): array
    {
        return json_decode($response->getBody()->getContents(), true);
    }

    /**
     * Build query.
     *
     * @param $verb
     * @param $url
     * @return array
     */
    protected function http($verb, $url): array
    {
        /* @var  \GuzzleHttp\Psr7\Response|\GuzzleHttp\Message\Response $response */
        try {
            $response = $this->client->$verb($url);
        } catch (\InvalidArgumentException $e) {
            $response = $this->client->$verb($url);
        }

        /** @var  $contents */
        $contents = $this->responseToJson($response);

        return $contents;
    }
}
