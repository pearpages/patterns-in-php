<?php
class HasQuarterState implements State{

	protected $gumballMachine;

	function __construct(GumballMachine $gumballMachine){
		$this->gumballMachine = $gumballMachine;
	}

	function insertQuarter(){
		echo "You can't insert another quarter\n";
	}

	function ejectQuarter(){
		echo "Quarter returned\n";
		$this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
	}

	function turnCrank(){
		echo "You turned...\n";
		$this->gumballMachine->setState($this->gumballMachine->getSoldState());
	}

	function dispense(){
		echo "No gumball dispensed\n";
	}
}