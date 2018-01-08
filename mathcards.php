<!DOCTYPE html>
<html lang="en">
    
<head>
  <!-- KEVINCLELAND.COM v2.0 -->
    
  <!-- Materialize compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">-->
    
  <?php include("head.php"); ?>
  
  <!-- CUSTOM STYLESHEETS & JS -->
      <link rel="stylesheet" type="text/css" href="mathcards-style.css" />
      <script src="loadcards.js" type="text/javascript"></script>
      
  <title>mathcards</title>

</head>

<body>
    
<?php $current_page = basename($_SERVER['PHP_SELF']); ?>
    
<div class="container">
    
    <!-- NAVBAR -->
    <?php include("navResponsive.php"); ?>
    
    <!-- THE CARDS -->
    <div class="row">
    
        <div class="col s12">
            <a id="title-link" href="math.json">
                <h1 id="title">MATHCARDS.</h1>
            </a>
            <h6 class="gc_credit">Created by the the students of 
                <a href="http://gateschili.org/high_school.cfm?subpage=3303">Gates Chili High School</a>
            </h6>
        </div>
        
        
        <div class="col s12">
            <div id="tags">
                <span class="tag all">ALL</span>
            </div>
        </div>
        </br>
        <div id="cards-row" class="row justify-content-center">
            <!-- ALL CARDS WILL BE FILLED IN BY loadcard.js HERE -->
            <div class="col-sm-12 col-lg-10" id="cards"></div>
        </div>
        
    </div> <!-- CLOSE CARDS -->
    
    <!-- FOOTER -->
    <?php include("footer.php"); ?>
        
</div> <!-- CLOSE CONTAINER -->
    
</body>

</html>