<?php
abstract class Pizza{

	abstract function getDescription();

	function prepare(){
		echo "prepare\n";
	}

	function bake(){
		echo "bake\n";
	}

	function cut(){
		echo "cut\n";
	}

	function box(){
		echo "box\n";
	}
}