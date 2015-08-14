<?php
class Mocha extends CondimentDecorator{

	function __construct(Beverage $beverage){
		parent::__construct($beverage);
		$this->description = 'Mocha';
		$this->cost = .20;
	}

	
}