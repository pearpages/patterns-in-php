<?php
function __autoload($class_name) {
    require_once $class_name . '.php';
}

$coffee = new Coffee();
$tea = new Tea();

$coffee->prepareRecipe();
$tea->prepareRecipe();
