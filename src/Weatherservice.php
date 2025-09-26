<?php

//namespace richardolaolu\weatherapp;

use GuzzleHttp\Client;

class Weatherservice {
    private Client $client;
    public function __construct(
        private $apiKey = ' 7246de415ccc5d4ff9c4fbb2852575d6',
        private $apiUrl = 'https://api.openweathermap.org/data/2.5/weather',
    ) {
        $this->client = new Client([]);
    }

    public function getWeather(string $city): array
    {
        $response = $this->client->get($this->apiUrl, [
            'query' => [
                'q' => $city,
                'appid' => $this->apiKey,
                'units' => 'metric',
            ],
        ]);
        $weatherData = json_decode($response->getBody()->getContents(), true);

        return [
            'city' => $weatherData['name'],
            'temperature' => $weatherData['main']['temp'],
            'description' => $weatherData['weather'][0]['description'],
            'humidity' => $weatherData['main']['humidity'],
        ];
    }
}