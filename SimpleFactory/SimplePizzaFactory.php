<?php
class SimplePizzaFactory{
	
	/**
	 * [createPizza description]
	 * @param  string $type [description]
	 * @return Pizza       [description]
	 */
	function createPizza($type){

		$pizza = null;

		if($type == 'cheese'){
			$pizza = new CheesePizza();
		}elseif($type == 'pepperoni'){
			$pizza = new PepperoniPizza();
		}elseif($type == 'clam'){
			$pizza = new ClamPizza();
		}elseif($type == "veggie"){
			$pizza = new VeggiePizza();
		}

		return $pizza;
	}
}