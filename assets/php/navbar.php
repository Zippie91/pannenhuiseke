<nav class="navbar navbar-light navbar-expand-lg bg-light fixed-top">
    <a href="/pannenhuiseke" class="navbar-brand">
        <img src="/pannenhuiseke/assets/images/PanLogo.png" height=30 width=auto alt="Pannenhuiseke VK" class="d-inline-block align-top"></img>
        Pannenhuiseke
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menuCollapsable" aria-controls="menuCollapsable">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menuCollapsable">
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item"><a href="/pannenhuiseke" class="nav-link active">Home</a></li>
            <li class="nav-item"><a href="/pannenhuiseke/club" class="nav-link">Club</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ploegen</a>
                <div class="dropdown-menu">
                    <?php foreach($actieve_ploegen as $ploeg ) { ?>
                        <?php if ($ploeg->verkort == 'ampersand') { ?>
                            <div class="dropdown-divider"></div>
                        <?php } ?>
                        <a class="dropdown-item" href="/pannenhuiseke/ploegen/<?php echo $ploeg->verkort; ?>"><?php echo $ploeg->naam; ?></a>
                    <?php } ?>
                </div>
            </li>
            <li class="nav-item"><a href="/pannenhuiseke/leden" class="nav-link">Leden</a></li>
            <li class="nav-item"><a href="/pannenhuiseke/sponsors" class="nav-link">Sponsors</a></li>
        </ul>
        <div class="dropdown-divider"></div>
        <form class="form-inline my-2 my-lg-0 justify-content-end">
            <input class="form-control mr-sm-2" type="text" placeholder="Zoeken" aria-label="Zoeken" />
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Zoeken</button>
        </form>
    </div>
</nav>