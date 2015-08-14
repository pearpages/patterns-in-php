<?php
require_once('Singleton.php');

$singleton = Singleton::getInstance();

$singleton->setOn();
echo $singleton->getStatus();

$singleton->setOff();
echo $singleton->getStatus();