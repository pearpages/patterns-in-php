<?php
class MenuItem extends MenuComponent{

	protected $name;

	protected $description;

	protected $vegetarian;

	protected $price;

	function __construct($name, $description, $vegetarian, $price){

		$this->name = $name;
		$this->description = $description;
		$this->vegetarian = $vegetarian;
		$this->price = $price;
	}

	function getName(){
		return $this->name;
	}

	function getDescription(){
		return $this->description;
	}

	function getPrice(){
		return $this->price;
	}

	function isVegetarian(){
		return $this->vegetarian;
	}

	function myPrint(){
		echo $this->getName();

		if($this->isVegetarian()){
			echo " (v)";
		}

		echo " ${$this->getPrice()}";
		echo " {$this->getDescription()}\n";

	}

	function createIterator(){
		return null;
	}
}