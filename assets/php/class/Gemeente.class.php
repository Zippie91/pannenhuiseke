<?php
class Gemeente {
    public $naam;
    public $postcode;
    
    function __construct($gemeente_naam, $gemeente_postcode) {
        $this->naam = $gemeente_naam;
        $this->postcode = $gemeente_postcode;
    }
}
?>