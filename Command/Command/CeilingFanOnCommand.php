<?php
namespace Command;
class CeilingFanOnCommand implements Command{

	protected $ceilingFan;

	function __construct(\Machine\CeilingFan $ceilingFan){
		 $this->ceilingFan = $ceilingFan;
	}

	function execute(){
		$this->ceilingFan->on();
	}

	function undo(){
		$this->ceilingFan->off();
	}

	function getName(){
		return "Ceiling Fan ON";
	}
}