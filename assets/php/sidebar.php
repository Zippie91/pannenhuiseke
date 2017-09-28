<div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
    <div class="list-group">
        <h3>Volgende wedstrijden</h3>
        <?php foreach($actieve_ploegen as $ploeg) { ?>
            <div class="container-nextgame">
                <h4><?php echo $ploeg->naam; ?></h4>
                
                <?php $nextGame = $ploeg->nextGame(); ?>
                <span   class="nextgame" 
                        id="<?php echo 'nextgame-' . $ploeg->verkort ?>" 
                        data-toggle="modal" 
                        data-target="#game-modal" 
                        data-game="<?php echo htmlspecialchars(json_encode($nextGame)); ?>" 
                        data-location="<?php echo htmlspecialchars(json_encode($zalen[$nextGame['location']])); ?>">
                    <p>
                        <small class="text-muted">
                            <strong><?php echo $nextGame['datetime']; ?></strong>
                        </small>
                        <br />
                        <?php echo $nextGame['team_home'] . ' - ' . $nextGame['team_away']; ?>
                    </p>
                </span>
            </div>
        <?php } ?>
    </div>
</div>