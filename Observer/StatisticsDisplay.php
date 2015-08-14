<?php
class StatisticsDisplay implements Observer, DisplayElement{

	private $temperature;

	private $humidity;

	private $weatherData;

	function __construct(WeatherData $weatherData){
		$this->weatherData = $weatherData;
		$weatherData->registerObserver($this);
	}

	function update($temperature,$humidity,$pressure){
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->display();
	}

	function display(){
		echo "Statistics: {$this->temperature} degrees and humidity {$this->humidity} \n";
	}
}