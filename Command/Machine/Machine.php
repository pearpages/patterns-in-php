<?php
namespace Machine;
abstract class Machine{
	
	protected $description;

	protected $name;

	function __construct($description){
		$this->description = $description;
	}

	function on(){
		echo $this->getText('on');
	}

	function off(){
		echo $this->getText('off');
	}

	protected function getText($text){
		return 	"{$this->name}: {$this->description} {$text}\n";
	}
}