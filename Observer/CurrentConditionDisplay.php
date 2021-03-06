<?php
class CurrentConditionDisplay implements Observer, DisplayElement{

	/**
	 * [$temperature description]
	 * @var float
	 */
	private $temperature;

	/**
	* [$humidity description]
	* @var float
	*/
	private $humidity;

	/**
	 * [$weatherData description]
	 * @var WeatherData
	 */
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
		echo "Current conditions: {$this->temperature} degrees and humidity {$this->humidity} \n";
	}
}