<?php
class View {
	private $layout;

	public function __construct ($layout) {
		$this->layout = $layout;
	}

    public function home () {
        $this->layout->
            app('homepage')->
            template('homepage')->
            write();
    }
}