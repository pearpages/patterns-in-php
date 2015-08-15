<?php
namespace Machine;
class CeilingFan extends Machine{

	protected $name = 'CeilingFan';

	protected $speed;

	function high(){
		$this->speed = 'high';
		echo $this->getText('high');
	}

	function medium(){
		$this->speed = 'medium';
		echo $this->getText('medium');
	}

	function low(){
		$this->speed = 'low';
		echo $this->getText('low');
	}

	function getSpeed(){
		return $this->speed;
	}
}