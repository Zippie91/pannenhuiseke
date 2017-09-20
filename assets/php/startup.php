<?php 
require_once("assets/php/autoloadclasses.php"); 
require_once("assets/php/connectdb.php"); 

$actieve_ploegen = array();

$sth = $dbh->query("SELECT * FROM ploegen WHERE is_actief = 1 ORDER BY club DESC, ploeg_naam");

while(($ploeg = $sth->fetch()) != false) { 
    $actieve_ploegen[$ploeg['ploeg_naam']] = new Ploeg($ploeg['ploeg_naam'], $ploeg['ploeg_verkort'], $ploeg['sporta_id'], $ploeg['divisie_id']);
}
?>
