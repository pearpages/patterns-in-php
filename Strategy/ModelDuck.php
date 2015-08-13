<?php
class ModelDuck extends Duck{

	function __construct(){
		$this->flyBehavior = new FlyNoWay();
		$this->quackBehavior = new Quack();
	}

	function display(){
		echo "I am a Model Duck \n";
	}
}