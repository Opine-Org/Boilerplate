<?php
namespace Helper;

use Opine\Interfaces\Layout as LayoutInterface;

class Header {
    private $layout;

    public function __construct (LayoutInterface $layout) {
        $this->layout = $layout;
    }

    function render ($arguments, $options) {
        return $this->layout->make('header');
    }
}