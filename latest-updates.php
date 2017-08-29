<?php
$file_base = "";
$title = "Welcome";
$desc = "EWG Talent is a staffing agency like no other - one entirely tailored to the events, sport and entertainment industry";
include $file_base."template/header.php";
?>

  <!-- Header -->
  <div class="intro-header">
    <div class="container">
      <div class="row">
        <div class="col-md-8" data-aos="fade-right" data-aos-once="true">
          <div class="intro-message text-left">
            <h1>Latest Updates</h1>
            <p>Kepp up to date with all the latest features of Event Workforce Group</p>
            <div class="header-button">
              <a href="get-started.php" target="_blank" class="btn btn-outline">Get Started</a>
            </div>
          </div>

          <div class="container">
            <div class="row arrow-down bounce">
              <div class="col-md-12 text-center">
                <a href="#video" class="down-arrow"><i class="fa fa-chevron-down"></i></a>
              </div>
            </div>
          </div>
          <!--END OF INTRO MESSAGE-->
        </div>
        <!--END OF COL-->
      </div>
      <!--END OF ROW-->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.intro-header -->

  <!-- Page Content -->

  <!-- EWG TALENT -->
  <div class="content-section-d" data-aos="fade-up" data-aos-once="true">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-lg-offset-1 col-sm-push-6 col-sm-6">
          <h2>Brand New Client Portal</h2>
          <p>Our latest update from Event Workforce Group, is our <strong>BRAND NEW</strong> client portal. With feature updates such as live quoting, available across all devices including mobile and tablet plus a brand new look and feel. This is one of our biggest updates yet and we couldn't be more more excited to finally r.</p>
          <div class="header-button">
              <a href="https://ew.rosterfy.co/ewg?talent" class="btn btn-outline">Log In</a>
          </div>
        </div>
        <div data-aos="fade-right" data-aos-once="true" class="col-lg-5 col-sm-pull-6 col-sm-6">
          <img class="featurette-image img-responsive img-rounded" src="assets/images/responsive_client_mock.gif" alt="Staff Portal">
        </div>
      </div>
    </div>
    <!--/.container -->
  </div>
  <!-- END Talent -->



  <!--Features-->
  <div class="content-section-a">
    <div class="container">
      <div class="row">
               <div class="col-md-12 text-center">
                 <h2>New Features</h2>
                 <p>Learn more about the brand new features we have released to the all new client portal.</p>
               </div>

              <div class="col-md-4 portfolio-item">
                  <a href="#">
                      <img class="img-responsive" src="assets/images/ipad_mock.png" alt="Event Operations">
                  </a>
                <div class="portfolio-text">
                  <h3>Complete New Look</h3>
                  <p>A brand new look and feel.</p> 
                </div>
              </div>
              <div class="col-md-4 portfolio-item">
                  <a href="#">
                      <img class="img-responsive" src="assets/images/past_events.png" alt="">
                  </a>
                <div class="portfolio-text">
                  <h3>Past Events</h3>
                  <!-- <p>Our merchandise staff are well presented and have experience in retail, cash handling or customer service-based roles. They have infectious personalities and are committed to helping achieve your sales targets.</p> -->
                </div>
              </div>
              <div class="col-md-4 portfolio-item">
                  <a href="#">
                      <img class="img-responsive" src="assets/images/responsive_client_mock.gif" alt="">
                  </a>
                <div class="portfolio-text">
                  <h3>Responsive</h3>
                  <p>Availble across all devices</p>
                </div>
              </div>

      </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
  </div><!-- END SECTION -->

  <!--AREAS WE STAFF-->
   <div class="content-section-a">
    <div class="container">
      <div class="row">
        <div class="col-md-4 portfolio-item">
            <a href="#">
                <img class="img-responsive" src="assets/images/quote.png" alt="Brand Activations">
            </a>
          <div class="portfolio-text">
            <h3>Live Quoting</h3>
            <p>Live on the spot quoting.</p>
          </div>
        </div>
              <div class="col-md-4 portfolio-item">
                  <a href="#">
                      <img class="img-responsive" src="assets/images/new-event.png" alt="">
                  </a>
                <div class="portfolio-text">
                  <h3>New  Add Event's Page</h3>
                  <p></p>
                </div>
              </div>
      </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</div><!-- END CONTENT SECTION-->


<?php
include $file_base.'template/footer.php';
?>
