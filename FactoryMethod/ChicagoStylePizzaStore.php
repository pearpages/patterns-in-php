<?php
class ChicagoStylePizzaStore extends PizzaStore{

	protected function createPizza($type){

		$pizza = null;

		if($type == 'cheese'){
			$pizza = new ChicagoCheesePizza();
		}elseif($type == 'pepperoni'){
			$pizza = new ChicagoPepperoniPizza();
		}elseif($type == 'clam'){
			$pizza = new ChicagoClamPizza();
		}elseif($type == "veggie"){
			$pizza = new ChicagoVeggiePizza();
		}

		return $pizza;
	}
}