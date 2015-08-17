<?php
class GumballMachine{

	protected $soldOutState;

	protected $noQuarterState;

	protected $hasQuarterState;

	protected $soldState;

	protected $winnerState;

	protected $state;

	protected $count = 0;

	function __construct($numberGumballs){
		$this->soldOutState = new SoldOutState($this);
		$this->noQuarterState = new NoQuarterState($this);
		$this->hasQuarterState = new HasQuarterState($this);
		$this->soldState = new SoldState($this);

		$this->count = $numberGumballs;
		if($numberGumballs > 0){
			$this->state = $this->noQuarterState;
		}else{
			$this->state = $this->soldOutState;
		}
	}

	function insertQuarter(){
		$this->state->insertQuarter();
	}

	function ejectQuarter(){
		$this->state->ejectQuarter();
	}

	function turnCrank(){
		$this->state->turnCrank();
		$this->state->dispense();
	}

	function setState(State $state){
		$this->state = $state;
	}

	function releaseBall(){
		echo "A gumball comes rolling out the slot...\n";
		if($this->count != 0){
			$this->count = $this->count - 1;
		}
	}
}