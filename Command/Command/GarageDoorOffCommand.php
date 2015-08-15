<?php
namespace Command;
class GarageDoorOffCommand implements Command{

	protected $garageDoor;

	function __construct(\Machine\GarageDoor $garageDoor){
		 $this->garageDoor = $garageDoor;
	}

	function execute(){
		$this->garageDoor->off();
	}

	function undo(){
		$this->garageDoor->on();
	}
	function getName(){
		return "GarageDoor OFF";
	}
}