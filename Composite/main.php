<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$pancakeMenu = new Menu("PANCAKE HOUSE MENU","Breakfast");
$pancakeMenu->add(new MenuItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", true, 2.99));
$pancakeMenu->add(new MenuItem("Regular Pancake Breakfast", "Pancakes with fried eggs", false, 2.99));
$pancakeMenu->add(new MenuItem("Blueberry Pancakes", "Pancakes made with fresh blueberries", true, 3.49));
$pancakeMenu->add(new MenuItem("Waffles", "Waffles, with your choice of blueberries or strawberries", true, 3.59));

$dinerMenu = new Menu("DINER MENU","Lunch");
$dinerMenu->add(new MenuItem("Vegetarian BLT","(Fakin') Bacon with lettuce & tomato on whole what", true, 2.99));
$dinerMenu->add(new MenuItem("BLT","Bacon with lettuce & tomato on whole wheat",false,2.99));
$dinerMenu->add(new MenuItem("Soup of the day","Soup of the day, with a side of potato salad",false,3.29));
$dinerMenu->add(new MenuItem("Hotdog","A hot dog, with saurkraut, relish, onions, topped with cheese.",false,3.05));

$cafeMenu = new Menu("CAFE MENU","Dinner");
$dessertMenu = new Menu("DESSERT MENU","Dessert of course!");

$allMenus = new Menu("ALL MENUS", "All menus combined");
$allMenus->add($pancakeMenu);
$allMenus->add($dinerMenu);
$allMenus->add($cafeMenu);
$allMenus->add($dessertMenu);

//add menu items here

$allMenus->myPrint();