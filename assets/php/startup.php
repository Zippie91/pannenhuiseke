<?php 
require_once("assets/php/autoloadclasses.php"); 
require_once("assets/php/connectdb.php"); 

$actieve_ploegen = array();
$zalen = array();
$ploegzalen = array();

$sth = $dbh->query("SELECT * FROM ploegen WHERE is_actief = 1 ORDER BY club DESC, ploeg_naam");

while(($ploeg = $sth->fetch()) != false) { 
    $actieve_ploegen[$ploeg['ploeg_naam']] = new Ploeg($ploeg['ploeg_naam'], $ploeg['ploeg_verkort'], $ploeg['sporta_id'], $ploeg['divisie_id']);
    
    foreach($actieve_ploegen[$ploeg['ploeg_naam']]->GetZalen() as $zaal) {
        $ploegzalen[] = $zaal;
    }
}

$ploegzalen = array_values(array_unique($ploegzalen));
$ploegzalen = join("','",$ploegzalen);

$sth = $dbh->query("SELECT z.sporta_id, z.zaal_naam, z.telefoon, z.telefoon_cafe, z.opmerking, a.straat, a.nummer, g.gemeente_naam, g.postcode 
                    FROM zalen z 
                    INNER JOIN adressen a ON z.adres_id = a.adres_id 
                    INNER JOIN gemeenten g ON a.gemeente_id = g.gemeente_id
                    WHERE z.sporta_id IN ('$ploegzalen')");

while(($zaal = $sth->fetch()) != false) {
    $zalen[$zaal['sporta_id']] = new Zaal($zaal['zaal_naam'], $zaal['sporta_id'], $zaal['telefoon'], $zaal['telefoon_cafe'], $zaal['opmerking'], $zaal['straat'], $zaal['nummer'], $zaal['gemeente_naam'], $zaal['postcode']);
}
?>
