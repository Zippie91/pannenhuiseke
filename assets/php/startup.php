<?php 
require_once("assets/php/autoloadclasses.php"); 
require_once("assets/php/connectdb.php"); 

//echo "Load Startup.php<br />";
//$start = microtime(true);

$actieve_ploegen = array();
$zalen = array();
$ploegzalen = array();

$sth = $dbh->query("SELECT p.*, d.*, b.divisie_kort AS beker_kort, b.divisie_sporta_id AS beker_sporta_id
                    FROM ploegen p
                    LEFT OUTER JOIN divisies d ON p.divisie_id = d.divisie_id
                    LEFT OUTER JOIN divisies b on p.beker_id = b.divisie_id AND (p.beker_id IS NOT NULL)
                    WHERE p.is_actief =1 
                    ORDER BY p.club DESC, p.ploeg_naam");

while(($ploeg = $sth->fetch()) != false) { 
    $actieve_ploegen[$ploeg['ploeg_verkort']] = new Ploeg($ploeg['ploeg_naam'], $ploeg['ploeg_verkort'], $ploeg['sporta_id'], $ploeg['divisie_naam'], $ploeg['divisie_kort'], $ploeg['divisie_sporta_id'], $ploeg['beker_naam'], $ploeg['beker_kort'], $ploeg['beker_sporta_id']);
    
    foreach($actieve_ploegen[$ploeg['ploeg_verkort']]->GetZalen() as $zaal) {
        $ploegzalen[] = $zaal;
    }
}

$ploegzalen = array_values(array_unique($ploegzalen));
$ploegzalen = join("','",$ploegzalen);

$startzalen = microtime(true);

$sth = $dbh->query("SELECT *
                    FROM zalen z 
                    INNER JOIN adressen a ON z.adres_id = a.adres_id 
                    INNER JOIN gemeenten g ON a.gemeente_id = g.gemeente_id
                    WHERE z.sporta_id IN ('$ploegzalen')");

while(($zaal = $sth->fetch()) != false) {
    $zaalwhilestart = microtime(true);
    
    $zalen[$zaal['sporta_id']] = new Zaal($zaal['zaal_naam'], $zaal['sporta_id'], $zaal['telefoon'], $zaal['telefoon_cafe'], $zaal['opmerking'], $zaal['straat'], $zaal['nummer'], $zaal['gemeente_naam'], $zaal['postcode']);
}



//echo "Loaded startup.php in " . (microtime(true) - $start) . " s<br />";
?>
