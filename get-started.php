<?php
$file_base = "";
$title = "Get Started";
$desc = "EWG Talent is a staffing agency like no other - one entirely tailored to the events, sport and entertainment industry";
$header_extra = '';
include $file_base."template/header.php";
?>
  <!-- Page Content -->

  <!-- Get Started -->
 <div id="wrap">
  <div class="content-section-g">
    <div class="container">
      <div class="row">
        <div class="col-md-8 text-center path">
          <h2>What type of motivated staff are you looking for?</h2>
          <h3>Our unique pathway program provides motivated tertiary students and graduates with relevant experience in the sport, events and entertainment industry</h3>
        </div>
      </div>
    </div>
    <!--/.container -->
  </div>
  <div class="container">
   <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 portfolio-item text-center">
                <a class="btn" data-ref='One'>
                    <img class="img-responsive" src="assets/activations.jpg" alt="Brand Activation Staff">
                </a>
                <p>Brand Activations</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 portfolio-item text-center">
                <a class="btn" data-ref='Two'>
                    <img class="img-responsive" src="assets/event.jpg" alt="Event Operation Staff">
                </a>
                <p>Event Operations</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 portfolio-item text-center">
                <a class="btn" data-ref='Three'>
                    <img class="img-responsive" src="assets/ticket.jpg" alt="Ticketing Staff">
                </a>
                <p>Ticketing Operations</p>
            </div>
        </div><!-- END FIRST ROW -->
        
    <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 portfolio-item text-center">
                <a class="btn" data-ref='Four'>
                    <img class="img-responsive" src="assets/merch.jpg" alt="Merchandise Staff">
                </a>
                <p>Merchandise</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 portfolio-item text-center">
                <a class="btn" data-ref='Five'>
                    <img class="img-responsive" src="assets/hospo.jpg" alt="Hospitality Staff">
                </a>
                <p>Hospitality</p>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 portfolio-item text-center">
                <a class="btn" data-ref='Six'>
                    <img class="img-responsive" src="assets/fulltime.jpg" alt="Fulltime Staff">
                </a>
                <p>Contract of Full Time</p>
            </div>
        </div><!-- END SECOND ROW -->
        
        <form method='post' class='wizard_form' action='get-started-1' id='ans'>
        <div style='display:none'>
          <input class='selected_btn' type='checkbox' name='ba' id='One' value='ba'/>
          <input class='selected_btn' type='checkbox' name='eo' id='Two' value='eo'/>
          <input class='selected_btn' type='checkbox' name='to' id='Three' value='to'/>
          <input class='selected_btn' type='checkbox' name='merc' id='Four' value='merc'/>
          <input class='selected_btn' type='checkbox' name='hos' id='Five' value='hos'/>
          <input class='selected_btn' type='checkbox' name='cft' id='Six' value='cft'/>
     </div>
        
        
        <div class="content-section-h">
          <div class="col-md-12 text-center">
              <div class="header-button">
                <a id="next" class="disabled btn btn-outline">Next</a>
              </div>
          </div>
        </div>  
          </form>

 </div><!-- END CONTAINER -->
</div><!--END WRAPPER-->  
  
  
 <?php
 $no_get_started = true;
 include $file_base.'template/footer.php';
 ?>