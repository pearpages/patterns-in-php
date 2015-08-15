<?php
namespace Machine;
class Stereo extends Machine{

	protected $name = 'Stereo';

	function setCd(){
		echo $this->getText('set CD');
	}

	function setDVD(){
		echo "set DVD\n";
	}

	function setRadio(){
		echo "set Radio\n";
	}

	function setVolume(){
		echo "set Volume\n";
	}
}