<?php
class Menu extends MenuComponent{

	protected $menuComponents;

	protected $name;

	protected $description;

	function __construct($name, $description){
		$this->name = $name;
		$this->description = $description;
	}

	function add(MenuComponent $menuComponent){
		$id = spl_object_hash($menuComponent);
		$this->menuComponents[$id] = $menuComponent;
	}

	function remove(MenuComponent $menuComponent){
		$id = spl_object_hash($menuComponent);
		unset($this->menuComponents[$id]);
	}

	function getChild($i){
		$keys = array_keys($this->menuComponents);
		return $this->menuComponents[$keys[$i]];
	}

	function getName(){
		return $this->name;
	}

	function getDescription(){
		return $this->description;
	}

	function myPrint(){
		echo $this->getName();
		echo " {$this->getDescription()}\n";

		$iterator = $this->iterator();
		while($iterator->hasNext()){
			$menuComponent = $iterator->next();
			$menuComponent->myPrint();
		}
	}

	protected function iterator(){
		if(!is_null($this->menuComponents)){
			return new DinerMenuIterator(array_values($this->menuComponents));	
		}else{
			return new DinerMenuIterator(array());
		}
		
	}

	function createIterator(){
		return new CompositeIterator($this->iterator());
	}
}