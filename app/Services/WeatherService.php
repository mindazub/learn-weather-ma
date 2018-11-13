<?php
/**
 * Created by PhpStorm.
 * User: mind
 * Date: 18.11.13
 * Time: 19.18
 */

declare(strict_types=1);

namespace App\Services;


use GuzzleHttp\Client;

class WeatherService
{
    private $apiUrl;
    private $apiAppId;
    private $town;
    private $client;

    /*
     * WeatherService Constructor
     */
    public function __construct(Client $client)
    {
        $this->apiUrl = env('W_URL');
        $this->apiAppId = env('W_APPID');
        $this->town = env('W_TOWN');
        $this->client = $client;
    }

    public function getCurrent()
    {
        $result = $this->client->get($this->apiUrl.'/weather', [
                'query' => [
                    'q'=> $this->town,
                    'appid' => $this->apiAppId,
                    'lang' => 'lt',
                    'units' => 'metric'
                ]
                ]);


        //dd($result->getBody()->getContents());

        return json_decode($result->getBody()->getContents());
    }
}
