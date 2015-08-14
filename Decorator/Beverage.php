<?php
abstract class Beverage{

	protected $description = "Unknown Beverage";

	function getDescription(){
		return $this->description;
	}

	/**
	 * [cost description]
	 * @return float [description]
	 */
	abstract function cost();
}