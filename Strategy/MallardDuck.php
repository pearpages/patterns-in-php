<?php
class MallardDuck extends Duck{

	function display(){
		echo "I am a Mallard Duck \n";
	}

	function __construct(){
		$this->quackBehavior = new Quack();
		$this->flyBehavior = new FlyWithWings();
	}
}