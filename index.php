<?php require_once('assets/php/startup.php'); ?>
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
                <div class="jumbotron">
                    <!-- Carousel - Featured -->
                    <div class="carousel slide" id="featuredCarousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#featuredCarousel" data-slide-to="0"></li>
                            <li data-target="#featuredCarousel" data-slide-to="1"></li>
                            <li data-target="#featuredCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/pannenhuiseke/assets/images/featured1.jpg" alt="First Slide" class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="/pannenhuiseke/assets/images/featured2.png" alt="Seconde Slide" class="d-block w-100">
                                <div class="carousel-caption d-none d-lg-block">
                                    <h4>Second Slide</h4>
                                    <p>Aenean lacinia bibendum nulla sed consectetur.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="/pannenhuiseke/assets/images/featured3.png" alt="third Slide" class="d-block w-100">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#featuredCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Vorige</span>
                        </a>
                        <a class="carousel-control-next" href="#featuredCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Volgende</span>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <!-- Main -->
                    <h1>Nieuws</h1>
                    <div class="row news">
                        <div class="row">
                            <div class="card">
                                <h3>Test</h3>
                                <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>
                                <p>Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis.</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="card">
                                <h3>Test</h3>
                                <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>
                                <p>Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis.</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="card">
                                <h3>Test</h3>
                                <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>
                                <p>Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis.</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="card">
                                <h3>Test</h3>
                                <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>
                                <p>Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis.</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="card">
                                <h3>Test</h3>
                                <p class="lead">Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document.</p>
                                <p>Use this document as a way to quickly start any new project. All you get is this text and a mostly barebones HTML document. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Cras mattis consectetur purus sit amet fermentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                <p>Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut id elit. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis.</p>
                            </div>
                        </div>
                    </div> <!-- /.text-center -->
                </div> <!-- /.row -->
                
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
    <script type="text/javascript" src="/pannenhuiseke/assets/js\offcanvas.js"></script>
    
    <!-- Modal -->
    <script type="text/javascript" src="/pannenhuiseke/assets/js/gamemodal.js"></script>
</body>
</html>