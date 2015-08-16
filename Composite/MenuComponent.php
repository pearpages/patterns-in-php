<?php
abstract class MenuComponent{

	//composite methods

	function add(MenuComponent $menuComponent){
		throw new Exception("Unsupported Operation");
	}

	function remove(MenuComponent $menuComponent){
		throw new Exception("Unsupported Operation");
	}

	function getChild($i){
		throw new Exception("Unsupported Operation");
	}


	//operation methods
	
	function getName(){
		throw new Exception("Unsupported Operation");
	}

	function getDescription(){
		throw new Exception("Unsupported Operation");
	}

	function getPrice(){
		throw new Exception("Unsupported Operation");
	}

	function isVegetarian(){
		throw new Exception("Unsupported Operation");
	}


	//operation method
	function myPrint(){
		throw new Exception("Unsupported Operation");
	}

	abstract function createIterator();
}