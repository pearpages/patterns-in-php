<?php
class PizzaStore{

	protected $factory;

	function __construct(SimplePizzaFactory $factory){
		$this->factory = $factory;
	}

	function orderPizza($type){

		$pizza = $this->factory->createPizza($type);

		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();

		return $pizza;
	}
}