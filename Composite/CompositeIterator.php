<?php
class CompositeIterator implements MyIterator{

	protected $stack;

	function __construct(MyIterator $iterator){
		$this->stack[] = $iterator;
	}
}