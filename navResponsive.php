<nav>
  <div class="row">
    <div class="nav navbar-header navbar-default">
      <button type="button" class="navbar-toggle" id="navMenuButton" data-toggle="collapse" data-target="#navbarTabs">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="index.php">
      <span id="nav_first_name">KEVIN</span><span id="nav_last_name">CLELAND.</span></a>
    </div>
    <div class="nav collapse navbar-collapse navbarCustom" id="navbarTabs">
      <ul class="nav navbar-nav">
        <!-- ABOUT -->
        <li role="presentation" class="<?php if ($current_page == "about.php"){ echo "active "; } ?> navItem">
        <a href="about.php">ABOUT</a></li>
        <!-- GAMES -->
        <!--<li role="presentation" class="<?php if ($current_page == "games.php"){ echo "active "; } ?> navItem">-->
        <!--<a href="games.php">GAMES</a></li>-->
        <!-- QUINTILLION -->
        <li role="presentation" class="<?php if ($current_page == "quintillion.php"){ echo "active "; } ?> navItem">
        <a href="quintillion.php">QUINTILLION</a></li>
        <!-- RANDOM NAME -->
        <li role="presentation" class="<?php if ($current_page == "randomName.php"){ echo "active "; } ?> navItem">
        <a href="randomName.php">RANDOM NAME</a></li>
        <!-- MATHCARDS -->
        <li role="presentation" class="<?php if ($current_page == "mathcards.php"){ echo "active "; } ?> navItem">
        <a href="mathcards.php">MATHCARDS</a></li>
        <!-- CONTACT -->
        <li role="presentation" class="<?php if ($current_page == "contact.php"){ echo "active "; } ?> navItem">
        <a href="contact.php">CONTACT</a></li>
      </ul>
      <!--<ul class="nav navbar-nav navbar-right">-->
      <!--  <li class="navItem disabled"><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->
      <!--  <li class="navItem disabled"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
      <!--</ul>-->
    </div>
  </div> <!-- CLOSE NAV ROW -->
</nav>