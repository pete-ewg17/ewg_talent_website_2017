<?php 
if(!isset($file_base)) {
	$file_base = "";
}
if(!isset($title)) {
	$title = "";
}
if(!isset($desc)) {
	$desc = "";
}
if(!isset($header_extra)) {
	$header_extra = "";
}
	$url = $_SERVER['PHP_SELF'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo $desc; ?>">
  <meta name="author" content="Event Workforce Group">
  <meta property="og:site_name" content="Event Workforce Group | Talent" />
  <meta property="og:title" content="?php echo $title; ?> Event Workforce Group Talent" />
  <meta property="og:description" content="<?php echo $desc; ?>" />
  <meta property="og:image" content="http://eventworkforcegroup.com/blog/wp-content/uploads/2016/11/EWG-Talent-Logo-FA-e1480399593341.png">
  <meta property="og:url" content="http://eventworkforcegroup.com/talent">
  <title><?php echo $title; ?> | Event Workforce Group Talent</title>
  <!-- Bootstrap Core CSS -->
 
  <link href="<?php echo $file_base; ?>css/bootstrap.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="<?php echo $file_base; ?>css/landing-page.css" rel="stylesheet">
  <link href="<?php echo $file_base; ?>css/hover.css" rel="stylesheet">
  <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="<?php echo $file_base; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <?php echo $header_extra; ?>
  <!--FAVICONS-->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $file_base; ?>assets/ewg_favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo $file_base; ?>assets/ewg_favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $file_base; ?>assets/ewg_favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $file_base; ?>assets/ewg_favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $file_base; ?>assets/ewg_favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $file_base; ?>assets/ewg_favicon/manifest.json">
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
        <a class="navbar-brand topnav" href="<?php echo $file_base; ?>index.php"><img class="logo" src="<?php echo $file_base; ?>assets/images/logos/ewg_talent_logo.svg" alt="EWG Talent Logo"></a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home<span class="caret"></span></a>

                           <ul class="dropdown-menu">
                             <li><a href="<?php echo $file_base; ?>index.php">Home</a></li>
                            <li><a href="http://eventworkforcegroup.com/">EWG Group</a></li>
            </ul>
          <li class="hvr-underline-from-center"><a href="<?php echo $file_base; ?>selection-process.php">Selection Process</a></li>
          <li class="hvr-underline-from-center"><a href="<?php echo $file_base; ?>how-it-works.php">How It Works</a></li>
          <li><a href="<?php echo $file_base; ?>get-started.php"><span class="text-info">Get Started</span></a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
  <!-- /End Nav -->