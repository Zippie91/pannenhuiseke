<?php
class Zaal {
    public $naam;
    public $sporta;
    public $adres;
    public $tel;
    public $telcafe;
    public $opmerking;
    
    function __construct($zaal_naam, $zaal_sporta, $zaal_tel, $zaal_telcafe, $zaal_opmerking, $zaal_adres_straat, $zaal_adres_nummer, $zaal_adres_gemeente_naam, $zaal_adres_gemeente_postcode) {
        $this->naam = $zaal_naam;
        $this->sporta = $zaal_sporta;
        $this->tel = $zaal_tel;
        $this->telcafe = $zaal_telcafe;
        $this->opmerking = $zaal_opmerking;
        $this->adres = new Adres($zaal_adres_straat, $zaal_adres_nummer, $zaal_adres_gemeente_naam, $zaal_adres_gemeente_postcode);
    }
}
?>