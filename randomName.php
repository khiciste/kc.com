<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- KEVINCLELAND.COM v2.0 -->

    <?php include("head.php"); ?>

    <!-- CUSTOM STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="randomName.css">

    <!-- CUSTOM JS -->
    <script type="text/javascript" src="randomName.js"></script>

    <title>random name</title>

</head>
  
<body>

<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<div class="container">
    
    <!-- Navbar -->
    <?php include("navResponsive.php"); ?>
    
    <!-- Heading -->
    <div class="row">
        <div class="jumbotron">
            <h1>LET'S GET READY TO RUMBLE!!!</h1>
        </div>
    </div>
    
    <div class="row centered-text">
    <!-- CLASSES (RADIO BUTTONS) -->
        <form id='classesForm'>
        
        <div class="col offset-s3 col-centered">
		<input type='radio' name='classes' value='rangers' id='rangers' 
				onclick='var dispNames = displayNames(this.form); return dispNames'>
		<label for='rangers' id='choice-rangers' class='choice'>Rangers</label>
		</div>
		
		<div class="col col-centered">
		<input type='radio' name='classes' value='cuse' id='cuse' 
				onclick='var dispNames = displayNames(this.form); return dispNames'>
		<label for='cuse' id='choice-cuse' class='choice'>'Cuse</label>
		</div>
		
        <div class="col col-centered">
		<input type='radio' name='classes' value='sabres' id='sabres' 
				onclick='var dispNames = displayNames(this.form); return dispNames'>
		<label for='sabres' id='choice-sabres' class='choice'>Sabres</label>
        </div>
        
        <div class="col col-centered">
		<input type='radio' name='classes' value='celtics' id='celtics'
				onclick='var dispNames = displayNames(this.form); return dispNames'>
		<label for='celtics' id='choice-celtics' class='choice'>Celtics</label>
		</div>
		
        <div class="col col-centered">
		<input type='radio' name='classes' value='yanks' id='yanks'
				onclick='var dispNames = displayNames(this.form); return dispNames'>
		<label for='yanks' id='choice-yanks' class='choice'>Yanks</label>
        </div>
        
        <div class="col col-centered">
		<div id="go-button" class='choice' value='Go!' onclick='var dispRand = randomName(this.form); return dispRand'>Go!</div>	
        </div>
        
	    </form>
	    
    </div> <!-- CLOSE CLASSES ROW -->

    <br />
    
    <!-- STUDENTS -->
    <div class="row centered-text">
        <div class="col-md-9 col-centered" id="studentCol">
        
        
        </div>
    </div>
    
    <br />
    <br />
    <br />
    
    <!-- FOOTER -->
    <?php include("footer.php"); ?>

</div> <!-- CLOSE CONTAINER -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!--<script src="js/bootstrap.min.js"></script>-->

</body>
  
</html>