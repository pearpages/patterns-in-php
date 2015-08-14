<?php
class Whip extends CondimentDecorator{

	function __construct(Beverage $beverage){
		parent::__construct($beverage);
		$this->description = 'Whip';
		$this->cost = .30;
	}
}