<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$store = new PizzaStore(new SimplePizzaFactory());

$pizza = $store->orderPizza('pepperoni');

echo $pizza->getDescription();