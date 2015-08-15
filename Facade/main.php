<?php
function __autoload($class_name) {
    include $class_name . '.php';
}

$homeTheater = new HomeTheaterFacade(
	new Amplifier(),
	new TUner(),
	new DVD(),
	new CD(),
	new Projector(),
	new Screen(),
	new Lights(),
	new Popper()
	);

$homeTheater->watchMovie("Marta's World");
$homeTheater->endMovie();