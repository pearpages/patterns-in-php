<?php
namespace Command;
class LightOnCommand implements Command{

	protected $light;

	function __construct(\Machine\Light $light){
		 $this->light = $light;
	}

	function execute(){
		$this->light->on();
	}

	function undo(){
		$this->light->off();
	}

	function getName(){
		return "Light ON";
	}
}