<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$store = new NYStylePizzaStore();

$pizza = $store->orderPizza('cheese');

echo $pizza->getDescription();

$pizza2 = $store->orderpizza('clam');

echo $pizza2->getDescription();