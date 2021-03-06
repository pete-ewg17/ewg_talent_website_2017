<?php
$file_base = "";
$title = "Latest Updates";
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
            <p>Keep up to date with all the latest features of Event Workforce Group</p>
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
          <p>The latest update from Event Workforce Group is our BRAND NEW Talent client portal. With feature updates such as improved responsiveness and live quoting plus a brand new look and feel, this is one of our biggest updates yet!</p>
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
                      <img class="img-responsive" src="assets/images/ipad_mock.png" alt="Ipad photo">
                  </a>
                <div class="portfolio-text">
                  <h3>Complete New Look</h3>
                  <p>We are a firm believer of out with the old and in with the new and that is exactly what we have done. The portal is now stylish, user friendly and intuitive, what more could you ask for.</p>
                </div>
              </div>
              <div class="col-md-4 portfolio-item">
                  <a href="#">
                      <img class="img-responsive" src="assets/images/past_events.png" alt="Macbook photo of new portal">
                  </a>
                <div class="portfolio-text">
                  <h3>Past Events</h3>
                  <p>Past events has had a timely over-haul, you can now view the ins and outs of your past events and view any photos of our Workforcers on site. Keeping track of your event portfolio has never been so easy.</p>
                </div>
              </div>
              <div class="col-md-4 portfolio-item">
                  <a href="#">
                      <img class="img-responsive" src="assets/images/responsive_client_mock.gif" alt="All devices photo">
                  </a>
                <div class="portfolio-text">
                  <h3>Responsive</h3>
                  <p>We understand that in this day and age, being able to work from behind a desk is limiting. We have designed the new portal to work across the broad market of smart phones and tablets so you can access it while on the go.</p>
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
                <img class="img-responsive" src="assets/images/live_quotes.png" alt="Live quoting imac">
            </a>
          <div class="portfolio-text">
            <h3>Live Quoting</h3>
            <p>We all love instant gratification. Our instant quoting feature provides exactly that. You can now view all staffing rates per role and shift, allowing you to streamline your event budgeting.</p>
          </div>
        </div>
              <div class="col-md-4 portfolio-item">
                  <a href="#">
                      <img class="img-responsive" src="assets/images/new-event.png" alt="New add events page macbook">
                  </a>
                <div class="portfolio-text">
                  <h3>New Add Event's Page</h3>
                  <p>Responsive, reactive and sleek. You will notice a massive difference in the new add event's page with an updated workflow and design.</p>
                </div>
              </div>
              <div class="col-md-4 portfolio-item">
                  <a href="#">
                      <img class="img-responsive" src="assets/images/view_invoices.png" alt="Invoice tracking iMac">
                  </a>
                <div class="portfolio-text">
                  <h3>Invoice Tracking</h3>
                  <p>We know reconciling your past event expenses can be a helpful resource. Check out our latest invoice tracking feature for your piece of mind.</p>
                </div>
              </div>
      </div><!-- END ROW -->
    </div><!-- END CONTAINER -->
</div><!-- END CONTENT SECTION-->


<?php
include $file_base.'template/footer.php';
?>
