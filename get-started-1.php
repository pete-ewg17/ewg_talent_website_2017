<?php
session_start();
$_SESSION['question_1'] = $_POST;
$file_base = "";
$title = "Sign Up";
$desc = "EWG Talent is a staffing agency like no other - one entirely tailored to the events, sport and entertainment industry";
$header_extra = '';
include $file_base."template/header.php";
?>
  <!-- Get Started -->
 <div id="wrap">
   
   <div class="content-section-g">
    <div class="container started">
      <div class="row">
        <div class="col-md-8 text-center path">
          <h2 id='more_details_heading'>Create Your Own Portal</h2>
          <h3>By completing the below fields you will gain access to your own portal which enables you to submit workforce requests, view quotes, download rosters, track invoices and submit post-event feedback</h3>
        </div>
      </div>
    </div>
  </div><!--/.container -->
 
 
 <div class="content-section-a">
  		<form id="final_ans" method="post" class='wizard_form' role="form" action='thankyou'>
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group" data-toggle="validator" role="form">
                      <label for="form_name">Name*</label>
                      <input id="contact_name" type="text" name="name" class="form-control mandatory" placeholder="Please enter your full name" required="required" data-error="Name is required.">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="form_name">Email*</label>
                      <input id="contact_email" type="email" name="email" class="form-control mandatory" placeholder="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  </div>
                   <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="form_phone">Phone*</label>
                      <input id="contact_phone" type="tel" name="phone" class="form-control mandatory" placeholder="Please enter your phone number" required="required">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  </div>
                   <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="form_company">Company*</label>
                      <input id="company" type="text" name="company" class="form-control mandatory" placeholder="Please enter your Company or Organization" required="required">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  </div>
                   <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="form_company">Position/Title*</label>
                      <input id="position" type="text" name="position" class="form-control mandatory" placeholder="Please enter your position in the company" required="required">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                </div>
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="sel1">Address</label>
                          <input type='text' name="address" id='address' class='form-control mandatory'/>
                      <div class="help-block with-errors"></div>
                      <input type='hidden' data-st='long_name' id='street_number' name='street_number' value=''/>
                      <input type='hidden' data-st='long_name' id='route' name='route' value=''/>
                      <input type='hidden' data-st='long_name' id='locality' name='locality' value=''/>
                      <input type='hidden' data-st='long_name' id='administrative_area_level_1' name='administrative_area_level_1' value=''/>
                      <input type='hidden' data-st='long_name' id='country' name='country' value=''/>
                      <input type='hidden' data-st='long_name' id='postal_code' name='postal_code' value=''/>
                    </div>
                  </div>
                  </div>
                   <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="sel1">Password</label>
                          <input type='password' name="password" id='password' class='form-control mandatory'/>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  </div>
                   <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="form-group">
                      <label for="sel1">Confirm Password</label>
                          <input type='password' id='password2' class='form-control mandatory'/>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  </div>
                  <div class="col-md-6 col-md-offset-2 submit">
                    <a  class="btn btn-success btn-send disabled" id="next">Create My Portal</a >
                    <br>
                    <input type="hidden" id="form_type" name="form_type" value="new_talent">
                    <input type="hidden" id="email_template" name="email_template" value="00_ewg-talent-template">
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                      
                      <div id="submitted_div" style="display:none">Submitted</div>
                      <div id="loading_div" style="display:none"><img src="assets/ring.gif"></div>
                      <p class="text-muted"><strong>*</strong> These fields are required.</p>
                    </div>
                  </div>
                </form>   
        </div><!-- CONTENT SECTION - A -->
  </div><!-- END WRAPPER -->
  
  <?php
 $no_get_started = true;
 $footer_extra = "<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBq10WQ5iexOEyCvy01hKyTPXEOjttR3jg&libraries=places'></script>";
 include $file_base.'template/footer.php';
 ?>
