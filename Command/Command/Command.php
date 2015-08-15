<?php
namespace Command;
interface Command{

	function execute();

	function undo();

	function getName();
}