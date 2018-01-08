<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- KEVINCLELAND.COM v2.0 -->
  
    <?php include("head.php"); ?>
    
    <title>games</title>
    
  </head>
  
  <body>
  
  <?php $current_page = basename($_SERVER['PHP_SELF']); ?>
    
    <div class="container-fluid">
    
        <!-- Navbar -->
        <div class="row">
            <?php include("navResponsive.php"); ?>
        </div>
        
        <!-- Heading -->
        <div class="row">
            <div class="jumbotron">
                <h1>TECH CLUB GAMES!</h1>
                <p>The students of Gates Chili's Tech Club have been developing their own video games. 
                Check 'em out!</p>
            </div>
        </div>
        
        <br>
        
        
        
    </div> <!-- CLOSE CONTAINER -->
    
    <?php include("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>