<?php
namespace Command;
class LightOffCommand implements Command{

	protected $light;

	function __construct(\Machine\Light $light){
		$this->light = $light;
	}

	function execute(){
		$this->light->off();
	}

	function undo(){
		$this->light->on();
	}

	function getName(){
		return 'Light OFF';
	}
}