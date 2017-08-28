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
                        <i class="fa fa-angle-double-left fa-3x toggleIcon" ></i>
                    </button>
                </p>
                <div class="row">
                    <h1><?php echo "Ploegenpagina"; ?></h1>
                    <p><?php print_r($_GET); ?></p>
                </div>
            </div> <!-- /.col-12.col-md-9 -->
            
            <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <h3>Volgende wedstrijden</h3>
                    <h4>Heren 1</h4>
                    <p>Test - Pannenhuiseke VK 1</p>
                    <p>&nbsp;</p>
                    <h4>Heren 2</h4>
                    <p>Test - Pannenhuiseke VK 2</p>
                    <p>&nbsp;</p>
                    <h4>Dames</h4>
                    <p>Test - Pannenhuiseke VK</p>
                    <div class="dropdown-divider"></div>
                    <h4>Ampersand</h4>
                    <p>Test - Ampersand</p>
                </div>
            </div>
        </div> <!-- /.row.row-offcanvas.row-offcanvas-right -->
    </div> <!-- /.container -->
    
    <footer class="footer">
      <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
      </div>
    </footer>
    
    <!-- Bootstrap - Core Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    
    <!-- OffCanvas -->
    <script type="text/javascript" src="/pannenhuiseke/assets/js\offcanvas.js"></script>
</body>
</html>