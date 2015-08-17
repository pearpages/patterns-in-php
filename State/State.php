<?php
interface State{

	function NoQuarterState();

	function HasQuarterState();

	function SoldState();

	function SoldOutState();

	function WinnerState();
}