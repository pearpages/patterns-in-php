<?php
namespace Command;
class CeilingFanHighCommand implements Command{

	protected $ceilingFan;

	protected $previousSpeed;

	function __construct(\Machine\CeilingFan $ceilingFan){
		$this->ceilingFan = $ceilingFan;
	}

	function execute(){
		$this->previousSpeed = $this->ceilingFan->getSpeed();
		exit($this->previousSpeed);
		$this->ceilingFan->high();
	}

	function undo(){
		$this->ceilingFan->{$this->previousSpeed}();
	}

	function getName(){
		return "Ceiling Fan HIGH";
	}
}