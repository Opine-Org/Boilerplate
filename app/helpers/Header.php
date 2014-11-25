<?php
namespace Helper;

class Header {
    private $layout;

    public function __construct ($layout) {
        $this->layout = $layout;
    }

    function render ($arguments, $options) {
        return $this->layout->make('header');
    }
}