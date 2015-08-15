<?php
namespace Command;
class StereoOffCommand implements Command{

	protected $stereo;

	function __construct(\Machine\Stereo $stereo){
		$this->stereo = $stereo;
	}

	function execute(){
		$this->stereo->off();
	}

	function undo(){
		$this->stereo->on();
	}

	function getName(){
		return "Stereo OFF";
	}
}