<?php
class RemoteControl{

	protected $onCommands;

	protected $offCommands;

	protected $undoCommand;

	function __construct(){
		for($i = 0; $i < 7; $i++){
			$this->onCommands[$i] = null;
			$tihs->offCommands[$i] = null;
		}
	}

	function setCommand($slot,\Command\Command $onCommand, \Command\Command $offCommand){

		$this->isValidSlot($slot);

		$this->onCommands[$slot] = $onCommand;
		$this->offCommands[$slot] = $offCommand;

		return $this;
	}

	protected function isValidSlot($slot){
		if(!is_numeric($slot)){
			throw new Exception("Wrong type");
		}elseif($slot > 6 || $slot < 0){
			throw new Exception("Wrong slot");
		}
		return true;
	}

	function onButtonWasPushed($slot){
		$this->isValidSlot($slot);
		$this->onCommands[$slot]->execute();
		$this->undoCommand = $this->onCommands[$slot];
	}

	function offButtonWasPushed($slot){
		$this->isValidSlot($slot);
		$this->offCommands[$slot]->execute();
		$this->undoCommand = $this->offCommands[$slot];
	}

	function undoButtonWasPushed(){
		if(!is_null($this->undoCommand)){
			$this->undoCommand->undo();	
		}
	}

	function __toString(){
		for( $i = 0; $i < 7; $i++){
			if(!is_null($this->onCommands[$i])){
				echo $i.' '.$this->onCommands[$i]->getName()."\n";
			}
			if(!is_null($this->offCommands[$i])){
				echo $i.' '.$this->offCommands[$i]->getName()."\n";	
			}
		}
		return "\n";
	}
}