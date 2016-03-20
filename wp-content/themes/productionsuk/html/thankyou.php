<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>325 productions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/animate.css">
    <link rel="stylesheet" href="styles/css/generic-skin.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Jura:400,600,500' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
    <script src="scripts/libs/jquery.waypoints.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

<header class="header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo-container pull-left">
                    <a href="index.php"><img src="images/layout/generic-skin/main-logo.png" alt="325productionsuk"></a>
                </div>
                <div class="nav-toggle-container pull-right">
                    <a id="toggleNav" href="#" class="ion-drag"></a>
                </div>
            </div>
        </div>
    </div>
</header><!-- ./header-->

<div class="site-navigation-wrapper-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="site-navigation-inner">
                    <div class="inner-page-nav">
                        <ul class="list-inline">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="portfolio.php">Portfolio</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div><!-- ./div -->

<section class="sub-page-banner" 
    style="background: url('images/layout/generic-skin/contact-banner.jpg') no-repeat center center; padding: 80px 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="sub-page-heading">
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./sub-page-banner-->

<section class="main-content">
    <div class="container">
        <div class="contact-page-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-info-container">
                        <h2>
                            Thank you for getting in touch, we will get back to you shortly.
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- ./main-content-->


<footer class="site-footer-wrapper">
            <div class="container">
                <div class="row">
                    <ul class="footer-nav list-inline">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <address class="footer-address">
                            <h3>325<span class="highlight">productions</span>uk</h3>
                            <p>36 Hoblands</p>
                            <p>Haywards Heath</p>
                            <p>West Sussex</p>
                            <p>RH16 3SA</p>
                        </address>
                    </div>
                    <div class="col-sm-4">
                       <div class="footer-logo-container">
                            <a href="index.php"><img src="images/layout/generic-skin/main-logo.png" alt="325productionsuk"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-container">
                            <p>M: 07519693701</p>
                            <p>E: <a href="mailto:325productionsuk@gmail.com" target="_blank">325productionsuk@gmail.com</a></p>
                            <p><a href="contact.html">Contact us</a></p>
                        </div>
                        <div class="social-container pull-right">
                            <ul class="list-inline">
                                <li><a class="ion-social-facebook" href="https://www.facebook.com/325productionsUK" target="_blank"></a></li>
                                <li><a class="ion-social-twitter" href="https://twitter.com/325prods_uk" target="_blank"></a></li>
                                <li><a class="ion-social-youtube" href="https://www.youtube.com/channel/UCh-dJAKlsYNT8f4qP57mnfw" target="_blank"></a></li>
                                <li><a class="ion-social-linkedin" href="https://uk.linkedin.com/pub/russell-stedman/40/4b9/567" target="_blank"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!-- ./footer-->

<div class="modal fade" id="projectModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Heading not available</h4>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" allowfullscreen></iframe>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script src="scripts/global.js"></script>
</body>
</html>