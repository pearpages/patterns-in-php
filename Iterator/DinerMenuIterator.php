<?php
class DinerMenuIterator implements MyIterator{

	protected $items;

	protected $position = 0;

	function __construct($items){

		$this->items = $items;
	}

	function next(){
		$menuItem = $this->items[$this->position];
		$this->position++;
		return $menuItem;
	}

	function hasNext(){
		if($this->position >= sizeof($this->items) || !isset($this->items[$this->position])){
			return false;
		}else{
			return true;
		}
	}
}