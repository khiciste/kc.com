<!DOCTYPE html>
<html lang="en">
    
<head>
    <!-- KEVINCLELAND.COM v2.0 -->

    <?php include("head.php"); ?>

    <!-- CUSTOM STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="quintillion.css">
    
    <!-- CUSTOM JS -->
    <script type="text/javascript" src="quintillion_lotterySim.js"></script>

    <title>quintillion</title>

</head>

<body>

<?php $current_page = basename($_SERVER['PHP_SELF']); ?>

<div class="container">

    <!-- Navbar -->
    <?php include("navResponsive.php"); ?>
      
    <!-- Heading -->
    <div class="jumbotron">
        <div class="row">
            <h1>HOW BIG IS A QUINTILLION?</h1>
                <p>When Warren Buffett put up a billion dollars for a perfect March Madness bracket, 
                he knew his money was <span style="font-style: italic">a lot</span> safer than most people think. 
                It's been calculated that the odds of someone out there picking a perfect bracket are 
                1 in 9,223,372,036,854,775,808. That's 9 quintillion, 223 quadrillion, 372 trillion, 36 billion, 
                854 million, 775 thousand, 808 possible bracket configurations. Of course it's possible, but 
                in order to understand just how unlikey picking a perfect bracket is, we're going have to start 
                <span style="font-style: italic">much</span> smaller. Let's try to win the lottery.
                </p>
        </div>
    </div>
    
    <!-- "BODY" -->
    <div class="row centered-text">
      <div class="col-md-10 col-centered">
        <!-- A MILLION IS MUCH BIGGER THAN YOU THINK -->
        <h3>A million is much bigger than you think</h3>
        <p>
        To get a better grasp of just how enormous 9 quintillion is, it's helpful to start (relatively) 
        smaller. Let's talk about the odds of another highly unlikely event: winning the lottery.
    
        I live in the state of New York, where the lottery is a pick 6 with the numbers 1-59. Mathematicians 
        call this a 59 choose 6 combination. It's a combination because order doesn't matter, so no matter what
        order the numbers come in, if they match yours you win.  This eliminates A LOT of redundancies, greatly
        increasing your chances of winning. (When order does matter, as in license plates, it's called a 
        <a href='http://betterexplained.com/articles/easy-permutations-and-combinations/'>permutation</a> instead 
        of a combination. Think: permutation, position.)
    
        Try your lucky numbers in the boxes below to simulate playing the lottery every week until you win! 
        FYI: You may win on your first try, but if your lucky numbers aren't so lucky, you may need to leave 
        this simulation running for days.
        </p>
        
        <br />
            
      </div>
    </div>
    
    <!-- USER'S LUCKY NUMBERS -->
    <div class="row luckyNumbersRow">
        <div class="col-xs-1 col-xs-offset-3 lucky-col">
            <input type="text" class="centered-text" id="luckyNumber1" contenteditable="true" placeholder="1"></input>
        </div>
        <div class="col-xs-1 lucky-col">
            <input type="text" class="centered-text" id="luckyNumber2" contenteditable="true" placeholder="2"></input>
        </div>
        <div class="col-xs-1 lucky-col">
            <input type="text" class="centered-text" id="luckyNumber3" contenteditable="true" placeholder="3"></input>
        </div>
        <div class="col-xs-1 lucky-col">
            <input type="text" class="centered-text" id="luckyNumber4" contenteditable="true" placeholder="4"></input>
        </div>
        <div class="col-xs-1 lucky-col">
            <input type="text" class="centered-text" id="luckyNumber5" contenteditable="true" placeholder="5"></input>
        </div>
        <div class="col-xs-1 lucky-col">
            <input type="text" class="centered-text" id="luckyNumber6" contenteditable="true" placeholder="6"></input>
        </div>
    </div>
    
    <br />
    
    <!-- WINNING LOTTO BALLS -->
    <div class="row centered-text">
        <div class="col-xs-1 col-xs-offset-3 lotto-col">
            <div class="lotto-ball centered-text" id="ball1">59</div>
        </div>
        <div class="col-xs-1 lotto-col">
            <div class="lotto-ball centered-text" id="ball2">58</div>  
        </div>
        <div class="col-xs-1 lotto-col">
            <div class="lotto-ball centered-text" id="ball3">57</div>  
        </div>
        <div class="col-xs-1 lotto-col">
            <div class="lotto-ball centered-text" id="ball4">56</div>  
        </div>
        <div class="col-xs-1 lotto-col">
            <div class="lotto-ball centered-text" id="ball5">55</div>  
        </div>
        <div class="col-xs-1 lotto-col">
            <div class="lotto-ball centered-text" id="ball6">54</div>  
        </div>
    </div>
    
    <br />
    
    <!-- PLAY BUTTON -->
    <div class="row">
        <div class="col-xs-4 col-md-2 col-xs-offset-4 col-md-offset-5">
            <button type="button" class="btn btn-success btn-block centered" id="playButton">Play</button>
        </div>
    </div>
    
    <br />
    
    <!-- POTENTIAL ERRORS -->
    <div class="row">
        <div class="col-md-10 col-md-offset-2 userNumberError" id='nanError'>Error: Not a number.</div>
        <div class='col-md-10 col-md-offset-2 userNumberError' id='lottoError'>Error: Play six numbers [1-59], no repeats.</div>
    </div>
    
    <br />
    
    <!-- CURRENT LOTTO RESULTS -->
    <div class="row">
        <div class="col-md-9 col-md-offset-3 resultsLabel">
            your lucky #s: <span class='resultsSpan' id='luckyList'></span></div>
        <div class="col-md-9 col-md-offset-3 resultsLabel">
            current winning #s: <span class='resultsSpan' id='winners'></span></div>
        <div class="col-md-9 col-md-offset-3 resultsLabel">
            current # of plays: <span class='resultsSpan' id='numOfPlays'></span></div>
    </div>
    
    <br />
    
    <!-- FINAL LOTTO RESULTS -->
    <div class="row">
        <div class="col-md-10 col-md-offset-3" id='lottoResults'>
        Results:  With your "lucky" numbers, <span class='resultsSpans' id='luckyNums'></span>, it took you 
        <span class='resultsSpans' id='numberOfWeeks'></span> week(s) to win the lottery!  That's only 
        <span class='resultsSpans' id='numberOfYears'></span> year(s)!</div>
    </div>
    
    <br />
    
    <!-- CALCULATOR SCREENSHOT -->
    <div class="row centered-text">
      <div class="col-md-10 col-centered">
        <p>OK, I digress.  So the number of possible lotto combinations is 59 choose 6 (expressed mathematically as 
          <sub>59</sub>C<sub>6</sub>). See the link above for the formula, or suffice it to say that it yields:
        </p>
      
        <div class='calcImg'>
            <img src='quintillion_59-choose-6-TI.JPG'/>
        </div>
        
        <p class='bigNumber'>45,057,474</p>
        
        <p>possible outcomes!  Needless to say, a <strong>1 in 45 million</strong> chance is pretty unlikely.  
        But compared to your odds of picking a perfect bracket, it's like comparing a free throw to a full court buzzer-beater.
        </p>
        
        <br />
        
        <!-- BACK TO THAT QUINTILLION -->
        <h3>Back to that quintillion</h3>
        
        <p>
        The 9.2 quintillion number comes from the fact that there are 63 games in the tournament, each with 2 possible outcomes 
        (either one team wins or the other one does).  
        According to the <a href='http://www.mathsisfun.com/data/basic-counting-principle.html'>Fundamental Counting Principle</a>, 
        this yields
        </p>
        
        <div class='calcImg'>
            <img src='quintillion_2-to-the-63-TI.JPG'/>
        </div>
        
        <br />
        
        <p>This number is so large that the calculator cannot display it all on one line, so it is expressing it in 
        <a href='http://www.mathsisfun.com/numbers/scientific-notation.html'>Scientific Notation</a>.  However, 
        <a href='http://www.wolframalpha.com/input/?i=2%5E63'>Wolfram Alpha can do it</a>!
        </p>
        
        <!-- <div class="col-xs-10 col-xs-offset-1"> -->
          <p class='bigNumber'>2<sup>63</sup> = 9,223,372,036,854,775,808</p>
        <!-- </div> -->
        
        <p>possible combinations!  
        This number is so massive that human beings have a hard time imagining it. We simply have no frame of 
        reference for numbers that large. The great astrophysicist Neil deGrasse Tyson pointed out that, counting 
        at the impressive rate of one number per second, it would take you 12 days to reach a million, but 32 
        <em>years</em> to reach a billion, and <a href="http://www.haydenplanetarium.org/tyson/read/quotes-by-neil-degrasse-tyson/science-literacy-quotes">
        "32,000 years to reach a trillion, which is as much time as has elapsed since people first drew on cave 
        walls!"</a> At that rate, since a quadrillion is a thousand trillions, and a quintillion is a thousand 
        quadrillions, it would take you 32 billion years to reach a quintillion, which is more than twice the age 
        of the universe!
        </p>
        
        <p>Here's another good frame of reference, again from Tyson. "Last I checked, Bill Gates was worth $50 
        billion. If the average employed adult, who is walking in a hurry, will pick up a quarter from the 
        sidewalk, but not a dime, then the corresponding amount of money (given their relative wealth) that Bill 
        Gates would ignore if he saw it lying on the street is $25,000."</p>
        
        <p>Lastly, check out how big a trillion dollars is (IN THE FORM OF PALLETS OF HUNDRED DOLLAR BILLS) at:
        <a href="http://www.pagetutor.com/trillion/index.html">pagetutor.com!</a>
        </p>
        
        
        <p>So 9 quintillion is a big number for sure, but <em>how much bigger</em> than that 1 in 45 milllion 
        chance of winning the lotto?</p>
        
        <br />
        
        <!-- IMPROVING YOUR ODDS -->
        <h3>Improving your odds</h3>
        
        <p>Of course, this assumes you know nothing about college hoops and just flip a coin to predict the winner of each
        game &mdash; ignoring facts such as no 16 seed has ever beaten a 1 seed, so those games are far more certain than a 
        50-50 coin flip.
        </p>
        
        <p>Laura McLay, an associate professor of engineering at the University of Wisconsin at Madison, says that even if you do 
        your research, your odds of picking the perfect bracket are still roughly
        </p>
        
        <p class='bigNumber'>1 in 128,000,000,000</p>
        
        <p><strong>(1 in 128 billion)!</strong>  This means that you are
        </p>
    </div>
    </div>
    
    <br />
    
    <div class="row centered-text">
    <div class="col-xs-10 col-centered" id='odds'>
        <p class='bigNumber'><sup>128 B</sup>&frasl;<sub>45 M </sub> &asymp; 2,844<span class='repeating'></span> times</p>
    </div>
    </div>
    
    <br />
    
    <div class="row centered-text">
    <div class="col-md-10 col-centered">
    <p>more likely to win the lottery than to pick a perfect bracket!  Assuming the 1 in 128 billion odds, 
    <a href='http://ftw.usatoday.com/2014/03/ncaa-tournament-odds-perfect-bracket-yahoo-warren-buffett/'>USA Today</a>
    pointed out that if we estimate that 25 million brackets are filled out online every year, we'd see a perfect one 
    roughly every 5,000 years!  When you look at it that way, it's no surprise that the 
    <a href='http://www.cnn.com/2014/03/22/us/ncaa-brackets-billion-dollars/'>last man standing</a> this year only got 
    just past halfway to perfection.  And 
    <a href='http://www.elkharttruth.com/sports/2014/03/21/Odds-of-having-perfect-NCAA-tournament-bracket-are-low-very-low.html'>
    The Elkhart Truth</a> wants you to keep in mind, you're <strong><em>far</em></strong> more likely to
    </p>
    </div>
    </div>
    
    <!-- ODDS LIST -->
    <div class="row centered-text">
    <div class="col-xs-12 col-md-10 col-md-offset-2 col-centered">
    <p>  
        <ul>
            <li>live to 100 (<a href='http://discovertheodds.com/what-are-the-odds-of-living-to-100/'>1 in 5,780</a>)
            </li>
            
            <li>be murdered (<a href='http://www.cdc.gov/nchs/data/nvsr/nvsr61/nvsr61_04.pdf'>1 in 18,989</a>)
            </li>
                
            <li>be struck by lightning (<a href='http://news.nationalgeographic.com/news/2004/06/0623_040623_lightningfacts.html'>1 in 700,000</a>)
            </li>
                
            <li>die in a plane crash (<a href='http://www.pbs.org/wgbh/nova/space/how-risky-is-flying.html'>1 in 11,000,000</a>)
            </li>
            
            or even
                
            <li>have identical quadruplets (<a href='http://abcnews.go.com/GMA/Health/identical-quadruplets-born-13-million/story?id=3506690'>1 in 13,000,000</a>)
            </li>
        </ul>
    </p>
    </div>
    </div>
    
    <!-- TO SUM IT UP -->
    <div class="row centered-text">
    <div class="col-md-10 col-centered">
    <h3>To sum it up</h3>
    <p>So you're more than 3 times more likely to have have identical quadruplets than to win the lotto.  Take a moment to count all all 
    the sets of identical quadruplets you know.  Zero?  Same.  These are extremely rare events.  But you are 2,844 times more likely to pick the winning 
    numbers than to pick the winning bracket!  But I'm still gonna play because, like they say, 
    </p>
    </div>
    </div>
    
    <!-- HEY, YOU NEVER KNOW -->
    <div class="row centered-text">
    <div class="col-xs-10 col-centered" id='neverKnowImg'>
        <img class="img-responsive" src='quintillion_hey-you-never-know.png'/>
    </div>
    </div>
    
    
    <br />
    <br />
    <br />
    
    <p></p>
    <p></p>
    <p></p>
    
    <?php include("footer.php"); ?> 

</div> <!-- CLOSE CONTAINER -->

</body>
</html>