<?php
class ClamPizza extends Pizza{

	function prepare(){
		echo "Preparing {$this->name}\n";
		$this->dough = $this->pizzaIngredientFactory->createDough();
		$this->sauce = $this->pizzaIngredientFactory->createSauce();
		$this->cheese = $this->pizzaIngredientFactory->createCheese();
		$this->clam = $this->pizzaIngredientFactory->createClams();
	}
}