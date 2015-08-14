<?php
abstract class Pizza{

	protected $name;

	protected $dough;

	protected $veggies;

	protected $cheese;

	protected $pepperoni;

	protected $clam;

	protected $pizzaIngredientFactory;

	abstract function prepare();

	function __construct(PizzaIngredientFactory $ingredientFactory){
		$this->pizzaIngredientFactory = $ingredientFactory;
	}

	function bake(){
		echo "Bake for 25 minutes at 350\n";
	}

	function cut(){
		echo "Cutting the pizza into diagonal slices\n";
	}

	function box(){
		echo "Place pizza in official PizzaStore box\n";
	}

	function setName($name){
		$this->name = $name;
		return $this;
	}

	function getName(){
		return $this->name;
	}

	function getDescription(){
		$text = array();
		foreach(get_object_vars($this) as $key => $var){
			if(is_string($var)){
				if($key != 'name'){
					$text[] = $var;	
				}
			}
		}
		return "{$this->name} description: ".implode(',',$text)."\n";
	}
}