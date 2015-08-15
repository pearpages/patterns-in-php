<?php
function __autoload($class_name) {
	$parts = explode("\\",$class_name);
    require_once implode(DIRECTORY_SEPARATOR,$parts) . '.php';
}

//Simple Remote
$remote = new SimpleRemoteControl();
$light = new Machine\Light("Corridor Light");
$lightOn = new Command\LightOnCommand($light);

$remote->setCommand($lightOn);
$remote->buttonWasPressed();

//Remote Control
$re = new RemoteControl();
$livingRoom = new Machine\Light('Living Room');
$kitchenLight = new Machine\Light('Kitchen');
$ceilingFan = new Machine\CeilingFan('Living Room');
$garageDoor = new Machine\GarageDoor('Main');
$stereo = new Machine\Stereo('My Room');

$re->setCommand(0, new Command\LightOnCommand($livingRoom), new Command\LightOffCommand($livingRoom));
$re->setCommand(1, new Command\LightOnCommand($kitchenLight), new Command\LightOffCommand($kitchenLight));
$re->setCommand(2, new Command\CeilingFanHighCommand($ceilingFan), new Command\CeilingFanOffCommand($ceilingFan));
$re->setCommand(3, new Command\GarageDoorOnCommand($garageDoor) ,new Command\GarageDoorOffCommand($garageDoor));
$re->setCommand(4, new Command\StereoOnWithCDCommand($stereo), new Command\StereoOffCommand($stereo));

echo $re;

$re->onButtonWasPushed(0);
$re->offButtonWasPushed(0);
$re->onButtonWasPushed(1);
$re->undoButtonWasPushed();
$re->offButtonWasPushed(1);
$re->onButtonWasPushed(2);
$re->undoButtonWasPushed();
$re->offButtonWasPushed(2);
$re->onButtonWasPushed(3);
$re->undoButtonWasPushed();
$re->offButtonWasPushed(3);
$re->onButtonWasPushed(4);
$re->offButtonWasPushed(4);