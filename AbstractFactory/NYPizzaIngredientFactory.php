<?php
class NYPizzaIngredientFactory implements PizzaIngredientFactory{

	function createDough(){
		return 'dough';
	}
	
	function createSauce(){
		return 'sauce';
	}

	function createCheese(){
		return 'cheese';
	}

	function createVeggies(){
		return 'veggies';
	}

	function createPepperoni(){
		return 'pepperoni';
	}

	function createClams(){
		return 'clams';
	}
}