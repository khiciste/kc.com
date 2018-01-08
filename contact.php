<!DOCTYPE html>
<html lang="en">
  
<head>
  <!-- KEVINCLELAND.COM v2.0 -->
  
  <?php include("head.php"); ?>
  
  <title>contact kc</title>
  
</head>

<body>

<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<div class="container">

  <!-- Navbar -->
  <?php include("navResponsive.php"); ?>
    
  <?php
        // echo "PHP test";
  ?>
    
  <!-- Heading -->
  <div id="contact-title-row" class="row">
      <div class="col-md-3 contact-title-col"><h1 id="contact-title">CONTACT.</h1></div>
  </div>
  
  <br />
  
  <!-- CONTACT FORM -->
  <div id="contact-form" class="row">
    <div class="col-xs-11 col-md-4 col-centered">
      <form class='contactForm' name='contactForm' action='contact_emailer.php' method='post' id='contactForm'>
        <div class="form-group">
          (<span class='star'>*</span>) = required field
        </div>
        
        <div class="form-group">
            <label for='name'>Full name <span class='star'>*</span></label>
            <br />
            <input type='text' class='form-control text' name='name' autofocus='autofocus' placeholder='Full Name' id='name' required>
            </div>
            
            <div class="form-group">
              <label for='email'>Email <span class='star'>*</span></label>
              <br />
              <input type='email' class='form-control text' name='email-1' placeholder="e.g. barry@barrygood.biz" id='email-1' required>
            </div>
            
            <div class="form-group">
                <label for='email'>Confirm email <span class='star'>*</span></label>
                <br />
                <input type='email' class='form-control text' name='email-2' placeholder="e.g. barry@barrygood.biz" id='email-2' required>
                <div id='emailAlert' style='display:none'><strong>Emails do not match!</strong></div>
                <div id='emailsMatch' style='display:none'><strong>Emails match</strong>
                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span></div>
            </div>
            
            <div class="form-group">
              <label for='areacode'> Phone <span class='hidden'>Area code</span></label>
              <br />
              <input type='tel' class='form-control phone' name="areacode" id='areacode' maxlength='3'>
              -
              <label for='threedigits' class='inline'><span class='hidden'>First three digits </span></label>
              <input type='tel' class='form-control phone' name='threedigits' id='threedigits' maxlength='3'>
              -
              <label for='fourdigits' class='inline'><span class='hidden'>Last four digits </span></label>
              <input type='tel' class='form-control phone' name='fourdigits' id='fourdigits' maxlength='4'>
            </div>
            
            <div class="form-group">
              <label for='comment'>Type your comments/concerns here <span class='star'>*</span></label>
              <br />
              <textarea maxlength=1000 name='commentBox' class='form-control' id='commentBox' rows='5' cols='60' placeholder='Mountainous praise/constructive criticism...' required></textarea>
            </div>
            
            <div class="checkbox">
                <fieldset>
                  <legend>Check all that apply</legend>
                  <label for='updates'>
                    <input type='checkbox' value='updates' name='updates' id='updates' checked>
                    I would like to receive updates from this website.</label>
                  <br />
                  <label for='acceptTerms'>
                    <input type='checkBox' name='acceptTerms' value='acceptTerms' id='acceptTerms' required>
                    I have read and accept the Terms of Service. <span class='star'>*</span></label>
                  <br />
                </fieldset>
            </div>
            
            <div class="form-group">
              <input type="submit" class="col-xs-3 col-xs-offset-1 btn btn-primary" 
              name="submit" id="submitButton" value="Submit"/>
            </div>
            
      </form>
    </div>
  </div>

  <br />
  <br />
  
  <?php include("footer.php"); ?>
  
</div> <!-- CLOSE CONTAINER -->

</body>

</html>