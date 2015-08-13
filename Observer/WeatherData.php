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
		$id = spl_object_hash($object);
		$this->observers[$id] = $observer;
	}

	function removeObserver(Observer $observer){
		$id = spl_object_hash($object);
		if(isset($this->observers[$id])){
			unset($this->observers[$id]);
		}
	}

	function notifyObservers(){
		foreach($this->observers as $o){
			$o.update($temperature, $humidity, $pressure);
		}
	}
}