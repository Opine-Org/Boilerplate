<?php
use Opine\Interfaces\Layout as LayoutInterface;

class View {
	private $layout;

	public function __construct (LayoutInterface $layout) {
		$this->layout = $layout;
	}

    public function home () {
        echo $this->layout->make('homepage');
    }
}