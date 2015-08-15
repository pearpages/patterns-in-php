<?php
namespace Command;
class CeilingFanOffCommand implements Command{

	protected $ceilingFan;

	function __construct(\Machine\CeilingFan $ceilingFan){
		 $this->ceilingFan = $ceilingFan;
	}

	function execute(){
		$this->ceilingFan->off();
	}

	function undo(){
		$this->ceilingFan->on();
	}

	function getName(){
		return "Ceiling Fan OFF";
	}
}