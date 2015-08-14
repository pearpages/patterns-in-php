<?php
class Singleton{

	private static $uniqueIstance;

	protected $status;

	private function __construct(){}

	static function getInstance(){
		if(self::$uniqueIstance == null){
			self::$uniqueIstance = new self();
		}
		return self::$uniqueIstance;
	}

	function setOn(){
		$this->status = 'on';
	}

	function setOff(){
		$this->status = 'off';
	}

	function getStatus(){
		return $this->status."\n";
	}
}