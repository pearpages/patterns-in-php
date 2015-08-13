<?php
interface Subject{

	function registerObserver(Observer $observer);

	function removeObserver(Observer $observer);

	function notifyObservers();
}