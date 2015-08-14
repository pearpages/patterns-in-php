<?php
class NYStylePizzaStore extends PizzaStore{
	
	protected function createPizza($type){

		$pizza = null;
		$ingredientFactory = new NYPizzaIngredientFactory();

		if($type == 'cheese'){
			$pizza = new CheesePizza($ingredientFactory);
			$pizza->setName("New York Style Cheese Pizza");
		}elseif($type == 'clam'){
			$pizza = new ClamPizza($ingredientFactory);
			$pizza->setName("New York Style Clam Pizza");
		}

		return $pizza;
	}
}