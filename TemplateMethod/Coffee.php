<?php
class Coffee extends CaffeineBeverage{

	function brew(){
		echo "Dripping Cofee through filter\n";
	}

	function addCondiments(){
		echo "Adding Sugar and Milk\n";
	}

	function hook(){
		echo "Optional hook overwritten in coffe\n";
	}
}