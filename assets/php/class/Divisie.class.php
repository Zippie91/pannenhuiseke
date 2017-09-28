<?php
class Divisie {
    public $naam;
    public $verkort;
    public $sporta;
    
    function __construct($divisie_naam, $divisie_verkort, $divisie_sporta_id) {
        $this->naam = $divisie_naam;
        $this->verkort = $divisie_verkort;
        $this->sporta = $divisie_sporta_id;
    }
}
?>