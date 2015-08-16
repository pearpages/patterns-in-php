<?php
function __autoload($class_name) {
    require_once $class_name . '.php';
}

function printMenu(MyIterator $iterator){
	while($iterator->hasNext()){
		$menuItem = $iterator->next();
		echo $menuItem->getName()."\n";
		echo $menuItem->getPrice()."\n";
		echo $menuItem->getDescription()."\n";
		echo "\n";
	}
}

$pancakeHouseMenu = new PancakeHouseMenu();
$breakfastItems = $pancakeHouseMenu->createIterator();

$dinerMenu = new DinerMenu();
$lunchItems = $dinerMenu->createIterator();

echo "Breakfast Items\n";
echo printMenu($breakfastItems);
echo "Lunch Items\n";
echo printMenu($lunchItems);