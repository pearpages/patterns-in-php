<?php
class DarkRoast extends Beverage{
		
		function __construct(){
				$this->description = "DarkRoast";
		}	

		function cost(){
			return 1.5;
		}
}