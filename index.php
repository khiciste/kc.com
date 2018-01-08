<!DOCTYPE html>
<html lang="en">
	
<head>
	<!-- KEVINCLELAND.COM v2.0 -->

	<?php include("head.php"); ?>
	
	<!-- CUSTOM JS -->
	<script type="text/javascript" src="index_addId.js"></script>

	<title>kc</title>

</head>

<body>

<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<div class="container">

    <!-- Navbar -->
    <?php include("navResponsive.php"); ?>
    
    <!-- Heading -->
    <div class="row centered-text">
        <div class="col-xs-3 col-sm-2 col-md-1"><img class="img-responsive img-circle" src="Trata_1_Cropped.jpg"/>
        </div>
    </div>
    
    <br />
    
    <!-- BLOG POSTS -->
    <div class="row centered-text">
        <div class="col-xs-10 col-centered" id='bracket-div'>
            <h3>Buffett's Bold Offer</h3>
            <a href='quintillion.php'><img class="img-responsive" id='bracket-pic' src='math_espn_buffett_tweet.png'/>
            <p class="caption">Click here to check out the odds!</p></a>
        </div>
    </div>
    
    <br />
    
	<div class="row centered-text">
	    <div class="col-xs-10 col-centered" id='snowboard-add-id-div'>
		    <h3>X-Games Qualifying</h3>
		    <img class="img-responsive" id='snowboard-add-id-img' src='math_snowboard-add-id_2014_01_24.png'/>
		    <p id="whatProp" class='caption'>Check out Sandbech's score -- <strong>what property is this?</strong>
		    <span id="addIdDiv" style="display:none">Additive Identity</span></p>
	    </div>
	</div>
	
	<br />
	
	<div class="row centered-text">
        <div class="col-xs-10 col-centered" id='energy pie-chart'>
            <h3>America's Energy Sources</h3>
		    <img class="img-responsive" id='energy-pie-chart-img' src='math_energy-pie-chart_2014_01_24.jpg'/>
		    <p class='caption'>That renewables section ought to be the bulk of the pie &mdash; let's go 
		    <span id='america'>Americans!</span></p>
	    </div>
	</div>
	
	<br />
	
	<div class="row centered-text">
		<div class="col-xs-10 col-centered" id='polar-pi-div'>
		    <h3>On a Cookie</h3>
		    <p>
			<img class="img-responsive" id='polar-pi-img' src='math_polar-pi_2010-11-21.jpg'/>
			<p class='caption'>A polar bear with a <span id='pi-symbol'>&pi;</span> bowtie by <span id='starbucks'>Starbucks!</span></p>
			</p>
		</div>
	</div>
	
	<br />
	
	<div class="row centered-text">
	    <div class="col-xs-10 col-centered">
	        <h3>Parallel planes!</h3>
			<img class="img-responsive" id='parallel-planes' src='math_parallel-planes_2010-09-29.jpg'/>
			<p class='caption'>Look around you...they're everywhere!</p>
		</div>
	</div>
	
	<br />
    
    <!-- TEMPLATE FOR A NEW ENTRY -->
    <div class="row centered-text">
        <div class="col-xs-8 col-centered">
        	<h3></h3>
        </div>
    </div>
    
    <br />

    <?php include("footer.php"); ?>

</div> <!-- CLOSE CONTAINER -->

</body>

</html>