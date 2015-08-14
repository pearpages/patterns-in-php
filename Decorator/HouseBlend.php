<?php
class HouseBlend extends Beverage{

	function __construct(){
		$this->description = "House Blend Coffee";
	}

	function cost(){
		return .89;
	}
}