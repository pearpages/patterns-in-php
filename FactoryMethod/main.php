<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$nyStore = new NYStylePizzaStore();

$pizza1 = $nyStore->orderPizza('cheese');
echo $pizza1->getDescription()."\n";

$chStore = new ChicagoStylePizzaStore();
$pizza2 = $chStore->orderPizza('pepperoni');
echo $pizza2->getDescription()."\n";