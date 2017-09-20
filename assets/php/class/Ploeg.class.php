<?php
class Ploeg 
{
    public $naam;
    public $verkort;
    public $sporta;
    public $divisie;
    public $ploeg_schema;
    public $ploeg_kalender;
    
    function __construct($ploeg_naam, $ploeg_verkort, $sporta_id, $sporta_divisie_id) {
        $this->naam = $ploeg_naam;
        $this->verkort = $ploeg_verkort;
        $this->sporta = $sporta_id;
        $this->divisie = $sporta_divisie_id;
        
        $this->ploeg_schema = file_get_contents("https://mijnbeheer.sportafederatie.be/competities/publiek/schema/1/json?team=$this->sporta");
        $this->ploeg_kalender = (array)json_decode(file_get_contents("https://mijnbeheer.sportafederatie.be/competities/publiek/rangschikking/1/json?divisions=[$this->divisie]"));
    }
    
    function NextGame() {
        $schema = (array)json_decode($this->ploeg_schema); 
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
}
?>