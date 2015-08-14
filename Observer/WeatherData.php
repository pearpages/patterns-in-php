<?php 
class WeatherData implements Subject{

	/**
	 * [$observers description]
	 * @var array of Observer
	 */
	private $observers = array();

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
	 * [$pressure description]
	 * @var float
	 */
	private $pressure;

	function registerObserver(Observer $observer){
		$id = spl_object_hash($observer);
		$this->observers[$id] = $observer;
	}

	function removeObserver(Observer $observer){
		$id = spl_object_hash($observer);
		if(isset($this->observers[$id])){
			unset($this->observers[$id]);
		}
	}

	function notifyObservers(){
		foreach($this->observers as $o){
			$o->update($this->temperature, $this->humidity, $this->pressure);
		}
	}

	function measuramentsChanged(){
		$this->notifyObservers();
	}

	function setMeasurements($temperature, $humidity, $pressure){
		$this->temperature = $temperature;
		$this->humidity = $humidity;
		$this->pressure = $pressure;
		$this->measuramentsChanged();	
	}
}