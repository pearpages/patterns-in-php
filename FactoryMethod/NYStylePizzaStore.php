<?php
class NYStylePizzaStore extends PizzaStore{
	
	function createPizza($type){

		$pizza = null;

		if($type == 'cheese'){
			$pizza = new NYCheesePizza();
		}elseif($type == 'pepperoni'){
			$pizza = new NYPepperoniPizza();
		}elseif($type == 'clam'){
			$pizza = new NYClamPizza();
		}elseif($type == "veggie"){
			$pizza = new NYVeggiePizza();
		}

		return $pizza;
	}
}