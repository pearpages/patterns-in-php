<?php
namespace Command;
class GarageDoorOnCommand implements Command{

	protected $garageDoor;

	function __construct(\Machine\GarageDoor $garageDoor){
		 $this->garageDoor = $garageDoor;
	}

	function execute(){
		$this->garageDoor->on();
	}

	function undo(){
		$this->garageDoor->off();
	}

	function getName(){
		return "GarageDoor ON";
	}
}