<?php require_once("assets/php/startup.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pannenhuiseke</title>
    
    <!-- favicon -->
    <link rel="icon" href="/pannenhuiseke/assets/images/favicon.ico">
    
    <!-- Bootstrap - Core CSS -->
    <link rel="stylesheet" href="/pannenhuiseke/node_modules/bootstrap/dist/css/bootstrap.css" type="text/css" />
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/pannenhuiseke/assets/css/vendor/font-awesome/css/font-awesome.min.css" type="text/css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/pannenhuiseke/assets/css/main.css" type="text/css" />
</head>
<body>
    <?php include("assets/php/navbar.php"); ?>
    
    <div class="container">
        <div class="row row-offcanvas row-offcanvas-right">
            <div class="col-12 col-md-9">
                <p class="float-right d-md-none">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="offcanvas">
                        <i class="fa fa-angle-double-left fa-2x toggleIcon" ></i>
                    </button>
                </p>
                <div class="container">
                    <ul class="nav nav-tabs" id="ploegTablist" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#kalender" id="profile-tab" data-toggle="tab" role="tab" aria-controls="kalender" aria-expanded="true">Kalender</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#klassement" id="klassement-tab" data-toggle="tab" role="tab" aria-controls="klassement">Klassement</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#beker" id="beker-tab" data-toggle="tab" role="tab" aria-controls="beker">Beker</a>
                        </li>
                    </ul>
                    
                    <div class="tab-content" id="ploegTablistContent">
                        <div class="tab-pane fade show active" id="kalender" role="tabpanel" aria-labelledby="kalender-tab"><?php echo $actieve_ploegen[$_GET['ploeg']]->CreateTableSchema($zalen); ?></div>
                        <div class="tab-pane fade" id="klassement" role="tabpanel" aria-labelledby="klassement-tab">Klassement <?php echo $actieve_ploegen[$_GET['ploeg']]->verkort; ?></div>
                        <div class="tab-pane fade" id="beker" role="tabpanel" aria-labelledby="beker-tab"></div>
                    </div>
                </div>
            </div> <!-- /.col-12.col-md-9 -->
            
            <?php include("assets/php/sidebar.php"); ?>
        </div> <!-- /.row.row-offcanvas.row-offcanvas-right -->
    </div> <!-- /.container -->
    
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
    
    <?php include("assets/php/game-modal.php"); ?>
    
    <!-- Bootstrap - Core Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <!-- OffCanvas -->
    <script type="text/javascript" src="/pannenhuiseke/assets/js/offcanvas.js"></script>
    
    <!-- Modal -->
    <script type="text/javascript" src="/pannenhuiseke/assets/js/gamemodal.js"></script>
</body>
</html>