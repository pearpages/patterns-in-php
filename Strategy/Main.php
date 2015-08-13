<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$mallard = new MallardDuck();
$mallard->display();
$mallard->swim();
$mallard->performQuack();
$mallard->performFly();

$model = new ModelDuck();
$model->display();
$model->swim();
$model->performQuack();
$model->performFly();