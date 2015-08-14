<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$weatherData = new WeatherData();
$currentDisplay = new CurrentConditionDisplay($weatherData);
$statisicsDisplay = new StatisticsDisplay($weatherData);
$forecastDisplay = new ForecastDisplay($weatherData);

$weatherData->setMeasurements(80,65,30);
$weatherData->setMeasurements(82,70,29);
$weatherData->setMeasurements(78,90,28);
