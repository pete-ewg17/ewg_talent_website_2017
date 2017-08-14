 <?php 
 if(!isset($footer_extra)) {
	$footer_extra = "";

}

if(!isset($no_get_started)) {
 ?>
  <!--CTA-->
  <div class="content-section-d cta" data-aos="fade-down" data-aos-once="true">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center ">
          <h2>Seeking motivated staff? </h2>
          <p>Give your event the edge today!</p>
          <div class="button-header">
            <a href="<?php echo $file_base; ?>get-started.php" target="_blank" class="btn btn-outline">Get Started</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php } ?>
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
  <footer class="footer-img img-reponsive">
    <div class="container">
      <div class="row" align="center">
        <div class="col-md-12">
          <ul class="list-inline">
           <li>
              <a href="http://eventworkforcegroup.com" target="_blank"><img src="<?php echo $file_base; ?>assets/images/logos/ewg_group.svg" class="img-responsive footer-logo" alt="EWG Group Logo">EWG Group</a>
            </li>
            <li>
              <a href="http://eventworkforcegroup.com/academy" target="_blank"><img src="<?php echo $file_base; ?>assets/images/logos/ewg_acad_logo.svg" class="img-responsive footer-logo" alt="Academy Logo ">Academy</a>
            </li>
            <li>
              <a href="http://eventworkforcegroup.com/talent" target="_blank "> <img src="<?php echo $file_base; ?>assets/images/logos/ewg_talent_logo.svg" class="img-responsive footer-logo" alt="Talent Logo"> Talent</a>
            </li>
            <li>
              <a href="http://eventworkforcegroup.com/technology" target="_blank "> <img src="<?php echo $file_base; ?>assets/images/logos/ewg_tech_logo.svg " class="img-responsive footer-logo " alt="Technology Logo ">Technology</a>
            </li>
          </ul>
          <p class="copyright text-muted small ">Australia: 80 Market Street, Southbank VIC 3205 Australia - America: 180 Sansome St, San Francisco, CA 94104, USA</p>
          <p class="copyright text-muted small ">Copyright &copy; Event Workforce Group 2017. All Rights Reserved</p>
          <p class="small"><a href="https://rosterfy.co/rosterfy_terms">Terms &amp; Conditions</a> <a href="http://eventworkforcegroup.com/technology/privacy-policy.php">Privacy Policy</a></p>
          <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page " data-toggle="tooltip " data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery -->
  <script src="<?php echo $file_base; ?>js/jquery.js "></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo $file_base; ?>js/bootstrap.min.js "></script>
  <!--CAROUSEL-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js "></script>
  <!--ANIMATE ON SCROLL -->
  <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js "></script>
  <!--STATS COUNTER-->
  <script src="<?php echo $file_base; ?>js/jquery.counterup.min.js "></script>
  <script src="<?php echo $file_base; ?>js/jquery.waypoints.min.js "></script>
  <!--VALIDATOR FOR CONTACT FORM-->
  <script src="<?php echo $file_base; ?>js/validator.js "></script>
  <!--Web Script-->
  <script src="<?php echo $file_base; ?>js/script.js "></script>
  <?php echo $footer_extra; ?>

</body>

</html>
