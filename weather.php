<?php
use Richardolaolu\Weatherapp\Weatherservice;

require_once __DIR__ . '/vendor/autoload.php';

$weatherService = new Weatherservice();
$city = 'London'; 
$weather = $weatherService->getWeather($city);
var_dump($weather);