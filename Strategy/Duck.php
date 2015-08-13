<?php
abstract class Duck{

	protected $flyBehavior;
	protected $quackBehavior;

	abstract function display();

	function performFly(){
		$this->flyBehavior->fly();
	}

	function performQuack(){
		$this->quackBehavior->quack();
	}

	function swim(){
		echo "All ducks float \n";
	}

	function setFlyBehavior(FlyBehavior $flyBehavior){
		$this->flyBehavior = $flyBehavior;
		return $this;
	}

	function setQuackBehavior(QuackBehavior $quackBehavior){
		$this->quackBehavior = $quackBehavior;
		return $this;
	}
}