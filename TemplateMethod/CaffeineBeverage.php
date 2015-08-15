<?php
abstract class CaffeineBeverage{

	final function prepareRecipe(){
		$this->boilWater();
		$this->brew();
		$this->pourInCup();
		$this->addCondiments();
		$this->hook();
	}

	abstract function brew();

	abstract function addCondiments();

	function boilWater(){
		echo "Boling water\n";
	}

	function pourInCup(){
		echo "Pouring into cup\n";
	}

	/**
	 * Optional hook that can be overwritten
	 * @return [type] [description]
	 */
	function hook(){

	}
}