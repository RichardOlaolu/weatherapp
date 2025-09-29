<?php
use Richardolaolu\Weatherapp\Weatherservice;

require_once __DIR__ . '/vendor/autoload.php';

if ($argc < 2) {
    echo "Usage: php weather.php <city>\n";
    exit(1);
}

$weatherService = new Weatherservice();
$city = $argv['1'];
echo "Fetching weather for $city\n";
$weather = $weatherService->getWeather($city);

echo "\n";
echo "City: " . $weather['city'] . "\n";
echo "Temperature: " . $weather['temperature'] . "°C\n";
echo "Description: " . $weather['description'] . "\n";
echo "Humidity: " . $weather['humidity'] . "%\n";

