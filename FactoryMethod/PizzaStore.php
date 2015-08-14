<?php
abstract class PizzaStore{

	function orderPizza($type){

		$pizza = $this->createPizza($type);

		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();

		return $pizza;
	}

	/**
	 * @return Pizza
	 */
	protected abstract function createPizza($type);
}