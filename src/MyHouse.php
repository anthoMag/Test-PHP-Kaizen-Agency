<?php

abstract class MyHouse {
    private string $color;
    private string $size;

    public function __construct($color, $size) {
        $this->color = $color;
        $this->size = $size;
    }

    public function generate(): string{
        
        $html = '<div class="house '. $this->color .' '. $this->size .'"></div>';

        return $html;
    }
}