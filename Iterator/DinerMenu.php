<?php
class DinerMenu implements Menu{

	const MAX_ITEMS = 6;

	protected $numberOfItems = 0;

	protected $menuItems;

	function __construct(){
		$this->addItem("Vegetarian BLT","(Fakin') Bacon with lettuce & tomato on whole what", true, 2.99);
		$this->addItem("BLT","Bacon with lettuce & tomato on whole wheat",false,2.99);
		$this->addItem("Soup of the day","Soup of the day, with a side of potato salad",false,3.29);
		$this->addItem("Hotdog","A hot dog, with saurkraut, relish, onions, topped with cheese.",false,3.05);
	}

	function addItem($name,$description,$vegetarian,$price){
		if($this->numberOfItems >= self::MAX_ITEMS){
			throw new Exception("Sorry, menu is full!");
		}else{
			$this->menuItems[] = new MenuItem($name, $description, $vegetarian, $price);
		}
	}

	function createIterator(){
		return new DinerMenuIterator($this->menuItems);
	}
}