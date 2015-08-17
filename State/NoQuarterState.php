<?php
class NoQuarterState implements State{

	protected $gumballMachine;

	function __construct(GumballMachine $gumballMachine){
		$this->gumballMachine = $gumballMachine;
	}

	function insertQuarter(){
		echo "You inserted a quarter\n";
	}

	function ejectQuarter(){
		echo "You haven't inserted a quester\n";
	}

	function turnCrank(){
		echo "You turned, but tehre's no quarer\n";
	}

	function dispense(){
		echo "You need to pay first\n";
	}

	function NoQuarterState(){

	}

	function HasQuarterState(){

	}

	function SoldState(){

	}

	function SoldOutState(){

	}

	function WinnerState(){

	}
}