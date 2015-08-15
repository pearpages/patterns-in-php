<?php
namespace Command;
class StereoOnWithCDCommand implements Command{

	protected $stereo;

	function __construct(\Machine\Stereo $stereo){
		$this->stereo = $stereo;
	}

	function execute(){
		$this->stereo->on();
		$this->stereo->setCD();
		$this->stereo->setVolume();
	}

	function undo(){
		$this->stereo->off();
	}

	function getName(){
		return "Stereo ON With CD";
	}
}