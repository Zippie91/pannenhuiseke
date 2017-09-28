<?php
class Ploeg 
{
    public $naam;
    public $verkort;
    public $sporta;
    public $divisie;
    public $beker;
    
    function __construct($ploeg_naam, $ploeg_verkort, $sporta_id, $sporta_divisie_naam, $sporta_divisie_verkort, $sporta_divisie_id, $sporta_beker_naam, $sporta_beker_verkort, $sporta_beker_id) {
        $this->naam = $ploeg_naam;
        $this->verkort = $ploeg_verkort;
        $this->sporta = $sporta_id;
        $this->divisie = new Divisie($sporta_divisie_naam, $sporta_divisie_verkort, $sporta_divisie_id);
        
        if ($sporta_beker_naam != null && $sporta_beker_verkort != null && $sporta_beker_id != null) {
            $this->beker = new Divisie($sporta_beker_naam, $sporta_beker_verkort, $sporta_beker_id);  
            
            
        }
    }
    
    function GetSchema() {
        return file_get_contents("https://mijnbeheer.sportafederatie.be/competities/publiek/schema/1/json?team=$this->sporta");
    }
    
    function GetKlassement() {
        $divisionSportaID = $this->divisie->sporta;
        return file_get_contents("https://mijnbeheer.sportafederatie.be/competities/publiek/rangschikking/1/json?divisions=[$divisionSportaID]");
    }
    
    function GetBekerSchema() {
        $bekerSportID = $this->beker->sporta;
        return file_get_contents("https://mijnbeheer.sportafederatie.be/competities/publiek/schema/1/json?team=$this->sporta&division=$bekerSportID");
    }
    
    function GetBeker() {
        $bekerSportID = $this->beker->sporta;
        return file_get_contents("https://mijnbeheer.sportafederatie.be/competities/publiek/rangschikking/1/json?divisions=[$bekerSportID]&type=cup");
    }
    
    function NextGame() {
        $schema = (array)json_decode($this->GetSchema()); 
        $nextGame = null;
        
        $now = time();
        
        foreach($schema as $game) {
            $game = (array)$game;
            
            $gameTime = strtotime(DateTime::createFromFormat('d/m/Y H:i', $game['datetime'])->format('Y/m/d H:i'));
            
            if (!$nextGame) {
                $nextGame = ($gameTime > $now ? $game : null);
                continue;
            }
            else {
                if ($gameTime > $now) {
                    
                    $nextGameTime = strtotime(DateTime::createFromFormat('d/m/Y H:i', $nextGame['datetime'])->format('Y/m/d H:i'));
                    
                    if ($gameTime < $nextGameTime) {
                        $nextGame = $game;
                    }
                }
            }
        }
        
        return $nextGame;
    }
    
    function GetZalen() {
        $schema = (array)json_decode($this->GetSchema());
        $zalen = array();
        
        foreach($schema as $game) {
            $game = (array)$game;
            
            array_push($zalen, $game['location']);
        }
        
        $zalen = array_values(array_unique($zalen));
        
        return $zalen;
    }
    
    function CreateTableSchema($zalen) {
        $schema = (array)json_decode($this->GetSchema());
        
        $table = "<table class='table table-hover game-schedule'>";
        $table .= "<thead class='thead-inverse'>";
        $table .= "<tr>";
        
        $table .= "<th>Periode</th>";
        //$table .= "<th>Nr.</th>";
        $table .= "<th>Divisie</th>";
        $table .= "<th>Dag</th>";
        $table .= "<th>Datum</th>";
        $table .= "<th>Tijd</th>";
        $table .= "<th>Thuisploeg</th>";
        $table .= "<th>Bezoekers</th>";
        $table .= "<th>Locatie</th>";
        $table .= "<th>T</th>";
        $table .= "<th>Uitslag</th>";
        //$table .= "<th><i class='fa fa-check'></i></th>";
        
        $table .= "</tr>";
        $table .= "</thead>";
        
        $table .= "<tbody>";

        foreach($schema as $game) {
            $game = (array)$game;
            
            $table .= "<tr>";
        
            $table .= "<td scope='row'>" . $game['period'] . "</td>";
            //$table .= "<td>" . $game['number'] . "</td>";
            $table .= "<td>" . $game['division'] . "</td>";
            $table .= "<td>" . $game['day'] . "</td>";
            $table .= "<td>" . $game['date'] . "</td>";
            $table .= "<td>" . $game['time'] . "</td>";
            $table .= "<td>" . $game['team_home'] . "</td>";
            $table .= "<td>" . $game['team_away'] . "</td>";
            $table .= "<td>" . $game['location'] . "</td>";
            $table .= "<td>" . $game['terrain'] . "</td>";
            $table .= "<td>" . $game['result'] . "</td>";
            //$table .= "<td>" . $game['approved'] . "</td>";
            
            $table .= "</tr>";
            
        }
        
        $table .= "</tbody>";
        
        $table .= "</table>";
        
        $end = microtime(true);
        $looptime = $end - $start;
        
        return $table;
    }
    
    function CreateTableKlassement() {
        
    }
}
?>