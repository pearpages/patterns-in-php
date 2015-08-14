<?php
class Espresso extends Beverage{
		
		function __construct(){
				$this->description = "Espresso";
		}	

		function cost(){
			return 1.99;
		}
}