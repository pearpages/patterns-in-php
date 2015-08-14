<?php
abstract class CondimentDecorator extends Beverage{

	protected $beverage;

	protected $cost;

	function __construct(Beverage $beverage){
		$this->beverage = $beverage;
	}

	function getDescription(){
		return $this->beverage->getDescription().", ".$this->description;
	}

	function cost(){
		return $this->beverage->cost() + $this->cost;
	}
}