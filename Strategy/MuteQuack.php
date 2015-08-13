<?php
class MuteQuack implements QuackBehavior{
	function quack(){
		echo "<<Silence >> \n";
	}
}