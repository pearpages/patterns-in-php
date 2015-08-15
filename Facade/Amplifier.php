<?php
class Amplifier{

	function on(){
		echo "Amplifier on\n";
	}

	function off(){
		echo "Amplifier off\n";
	}

	function setDVD(){
		echo "Set DVD\n";
	}

	function setSurroundSound(){
		echo "Set Sourround Sound\n";
	}
	
	function setVolume($volume){
		echo "Set Volume <<{$volume}>>\n";
	}
	
}