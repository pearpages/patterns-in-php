<?php
class HomeTheaterFacade{

	protected $amp;

	protected $tuner;

	protected $dvd;

	protected $cd;

	protected $projector;

	protected $lights;

	protected $screen;

	protected $popper;

	function __construct(
		Amplifier $amp,
		Tuner $tuner,
		DVD $dvd,
		CD $cd,
		Projector $projector,
		Screen $screen,
		Lights $lights,
		Popper $popper){

		$this->amp = $amp;
		$this->tuner = $tuner;
		$this->dvd = $dvd;
		$this->cd = $cd;
		$this->projector = $projector;
		$this->screen = $screen;
		$this->lights = $lights;
		$this->popper = $popper;
	}

	function watchMovie($movie){
		echo "Get ready to wach {$movie}...\n";
		$this->popper->on();
		$this->popper->pop();
		$this->lights->dim(10);
		$this->screen->down();
		$this->projector->on();
		$this->projector->wideScreenMode();
		$this->amp->on();
		$this->amp->setDVD();
		$this->amp->setSurroundSound();
		$this->amp->setVolume(5);
		$this->dvd->on();
		$this->dvd->play();
	}

	function endMovie(){
		echo "Shutting movie theater down...\n";
		$this->popper->off();
		$this->lights->on();
		$this->screen->up();
		$this->projector->off();
		$this->amp->off();
		$this->dvd->stop();
		$this->dvd->eject();
		$this->dvd->off();
	}
}