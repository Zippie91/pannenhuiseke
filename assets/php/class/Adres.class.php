<?php
class Adres {
    public $straat;
    public $nummer;
    public $gemeente;
    
    function __construct($adres_straat, $adres_nummer, $adres_gemeente_naam, $adres_gemeente_postcode) {
        $this->straat = $adres_straat;
        $this->nummer = $adres_nummer;
        $this->gemeente = new Gemeente($adres_gemeente_naam, $adres_gemeente_postcode);
    }
}
?>