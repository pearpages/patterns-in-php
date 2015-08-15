<?php
class Tea extends CaffeineBeverage{

	function brew(){
		echo "Steeping the tea\n";
	}

	function addCondiments(){
		echo "Adding Lemon\n";
	}
}