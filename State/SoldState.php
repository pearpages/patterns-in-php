<?php
class SoldState implements State{

	protected $gumballMachine;

	function __construct(GumballMachine $gumballMachine){
		$this->gumballMachine = $gumballMachine;
	}

	function insertQuarter(){
		echo "Please wait, we're already giving you a gumball\n";
	}

	function ejectQuarter(){
		echo "Sorry, you already turned the crank\n";
	}

	function turnCrank(){
		echo "Turning twice doesn't get you another gumball!\n";
	}

	function dispense(){
		$this->gumballMachine->releaseBall();
		if($this->gumballMachine->getCount() > 0){
			$this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
		}else{
			echo "Oops, out of gumballs!\n";
			$this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
		}
	}
}