<?php
class MenuItem{

	protected $name;

	protected $description;

	protected $vegetarian;

	protected $price;

	function __construct(
		$name,
		$description,
		$vegetarian,
		$price){

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
}