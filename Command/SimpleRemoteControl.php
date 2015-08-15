<?php
class SimpleRemoteControl{

	protected $slot;

	function setCommand(Command\Command $command){
		$this->slot = $command;
	}

	function buttonWasPressed(){
		$this->slot->execute();
	}
}