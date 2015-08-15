<?php
function __autoload($class_name) {
    require_once $class_name . '.php';
}

$mallard = new MallardDuck();
$turkey = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

$turkey->gobble();
$turkey->fly();

$turkeyAdapter->quack();
$turkeyAdapter->fly();
