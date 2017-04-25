<?php
session_start();
$_SESSION['question_2'] = $_POST;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="EWG Talent is a staffing agency like no other - one entirely tailored to the events, sport and entertainment industry..">
  <meta name="author" content="Event Workforce Group">
  <meta property="og:site_name" content="Event Workforce Group | Talent" />
  <meta property="og:title" content="Event Workforce Group Talent" />
  <meta property="og:description" content="EWG Talent is a staffing agency like no other - one entirely tailored to the events, sport and entertainment industry." />
  <meta property="og:image" content="http://eventworkforcegroup.com/blog/wp-content/uploads/2016/11/EWG-Talent-Logo-FA-e1480399593341.png">
  <meta property="og:url" content="http://eventworkforcegroup.com/talent">
  <title> Welcome | Event Workforce Group Talent</title>
  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/landing-page.css" rel="stylesheet">
  <link href="css/hover.css" rel="stylesheet">
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!--FAVICONS-->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/ewg_favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/ewg_favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/ewg_favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/ewg_favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/ewg_favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/ewg_favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/ewg_favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/ewg_favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/ewg_favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/ewg_favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/ewg_favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/ewg_favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/ewg_favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/ewg_favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/ewg_favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
  <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/2749099.js"></script>
  <!-- End of HubSpot Embed Code -->
</head>

<body>
  
  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top topnav animated fadeInDown" role="navigation">
    <div class="container topnav">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> </button>
        <a class="navbar-brand topnav" href="index.html"><img class="logo" src="assets/images/logos/ewg_talent_logo.svg" alt="EWG Talent Logo"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="hvr-underline-from-center"> <a href="index.html">Home</a></li>
          <li class="hvr-underline-from-center"><a href="selection-process.html">Our Selection Process</a></li>
          <li class="hvr-underline-from-center"><a href="#">How It Works</a></li>
          <li class="hvr-underline-from-center"><a href="get-started.html">Get Started</a> </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /End Nav -->

  

  <!-- Page Content -->

  <!-- Get Started -->
 <div id="wrap">
  <div class="content-section-g">
    <div class="container started">
      <div class="row">
        <div class="col-md-8 text-center path">
          <h2>Approximately how many motivated staff will be required per event?</h2>
        </div>
      </div>
    </div>
    <!--/.container -->
  </div>
 <form id='ans' method='post' action='get-started-3' class='wizard_form'>
  <div class="container">
   <div class="row bg-color">
     <div class="col-md-8 col-md-offset-2">
       <div class="form-group center">
         <label for="number-input"></label>
        <input placeholder="Please enter a number:" type="number" class="form-control" name='num_staff' id="number">
      </div>
    </div>                 
    </div><!-- END SECOND ROW -->
  </div>      
    </form>
  <div class="content-section-h">
    <div class="col-md-12 text-center">
        <div class="header-button">
          <a id="next" class="btn btn-outline disabled">Next</a>
        </div>
    </div>
  </div>  
        

 </div><!-- END WRAPPER -->

  
  
  
<!--DONT TOUCH-->

  <!--SOCIAL ICONS-->
  <div class="banner ">
    <div class="container ">
      <div class="row ">
        <div class="col-xs-12 ">
          <ul class="list-inline banner-social-buttons ">
            <li class="social-button "> <a href="http://www.facebook.com/EventWorkforceGroup/ " class="btn btn-default btn-lg hvr-radial-in "><i class="fa fa-facebook fa-fw "></i></a> </li>
            <li class="social-button "> <a href="http://twitter.com/_ewgroup " class="btn btn-default btn-lg hvr-radial-in "><i class="fa fa-twitter fa-fw "></i></a> </li>
            <li class="social-button "> <a href="http://www.instagram.com/eventworkforcegroup/ " class="btn btn-default btn-lg hvr-radial-in "><i class="fa fa-instagram fa-fw "></i></a> </li>
            <li class="social-button "> <a href="http://www.linkedin.com/company/eventworkforcegroup " class="btn btn-default btn-lg hvr-radial-in "><i class="fa fa-linkedin fa-fw "></i></a> </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.banner -->

  <!-- Footer -->  
  <footer class="footer-img img-responsive">
    <div class="container">
      <div class="row" align="center">
        <div class="col-md-12">
          <ul class="list-inline">
            <li>
              <a href="http://eventworkforcegroup.com/academy" target="_blank"><img src="assets/images/logos/ewg_acad_logo.svg" class="img-responsive footer-logo" alt="Academy Logo ">Academy</a>
            </li>
            <li>
              <a href="http://eventworkforcegroup.com/talent" target="_blank "> <img src="assets/images/logos/ewg_talent_logo.svg" class="img-responsive footer-logo" alt="Talent Logo"> Talent</a>
            </li>
            <li>
              <a href="http://eventworkforcegroup.com/technology " target="_blank "> <img src="assets/images/logos/ewg_tech_logo.svg " class="img-responsive footer-logo " alt="Technology Logo ">Technology</a>
            </li>
          </ul>
          <p class="copyright text-muted small ">Copyright &copy; Event Workforce Group 2017. All Rights Reserved</p>
          <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page " data-toggle="tooltip " data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!--ANIMATE ON SCROLL -->
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <!--Web Script-->
  <script src="js/script.js"></script>
  </body>
</html>