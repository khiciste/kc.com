<!DOCTYPE html>
<html lang="en">
  
<head>
  <!-- KEVINCLELAND.COM v2.0 -->
  
  <?php include("head.php"); ?>
  
  <title>about kc</title>
  
</head>

<body>

<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<div class="container">
  
  <!-- Navbar -->
  <?php include("navResponsive.php"); ?>
  
  <!-- Heading -->
  
  <div class="jumbotron">
    
    <div class="row">
      
      <div class="col-xs-3 col-sm-2">
        <img id="about-img" class="img-responsive img-circle" src="Trata_1_Cropped.jpg"/>
      </div>
      <div class="col-xs-9 col-sm-10">
        <h1>ABOUT.</h1>
        <p>
        I'm a high school math teacher, tutor, and an amateur computer programmer. In 2017, 
        I became a member of the NYS Master Teacher Program. I code this entire 
        site myself, using HTML, CSS, PHP, JavaScript, jQuery, Bootstrap, and Materialize. 
        I also run our middle school's Tech Club, where we teach kids how to write their own 
        video games, and help coach our middle school LEGO Robotics Team. I like to read, 
        hike, travel, work out, and absolutely dominate yard games.  
        </p>
      </div>
    </div> <!-- CLOSE ROW -->
  </div> <!-- CLOSE JUMBOTRON -->
  
<?php include("footer.php"); ?>

</div> <!-- CLOSE CONTAINER -->
  
</body>
  
</html>