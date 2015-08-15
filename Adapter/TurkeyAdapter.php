<?php
class TurkeyAdapter implements Duck{

	protected $turkey;

	function __construct(Turkey $turkey){
		$this->turkey = $turkey;
	}

	function quack(){
		$this->turkey->gobble();
	}

	function fly(){
		for($i=0; $i<5; $i++){
			$this->turkey->fly();
		}
	}
}