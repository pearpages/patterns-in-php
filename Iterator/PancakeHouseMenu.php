<?php
class PancakeHouseMenu implements Menu{

	protected $menuItems;

	function __construct(){
		$this->addItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", true, 2.99);

		$this->addItem("Regular Pancake Breakfast", "Pancakes with fried eggs", false, 2.99);

		$this->addItem("Blueberry Pancakes", "Pancakes made with fresh blueberries", true, 3.49);

		$this->addItem("Waffles", "Waffles, with your choice of blueberries or strawberries", true, 3.59);
	}

	function addItem($name,$description,$vegetarian,$price){
		$this->menuItems[] = new MenuItem($name,$description,$vegetarian,$price);
	}

	function createIterator(){
		return new DinerMenuIterator($this->menuItems);
	}
}