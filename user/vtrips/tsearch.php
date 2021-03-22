
<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Leh to Manali Bike Trip via Pangong – Leh Pangong Manali Bike Tour 2019 </title>
    <meta name="description" content="Get ready to enjoy Leh to Manali Bike Tour via Pangong of 09 Days on Royal Enfield Bike. Trip Start from Leh to Pangong and end at Manali. Book Your Trip for Now. The Most Trusted Bike Tour Organizer in India.">
    <!--Keywords -->
    <link rel="apple-touch-icon" sizes="57x57" href="apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="canonical" href="lehPangongManali.html">

    <meta name="keywords" content="adventure offroad Leh to Manali Bike Trip, tsomariri, leh to manali bike tour, leh to manali bike trip packages 2019 ">
          
    <meta name="author" content="Dream Riders Mototouring">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">

    <!-- Player -->
    <link rel="stylesheet" href="css\components\jquery.mb.YTPlayer.min.css">
    <!-- Revolution Slider -->
    <link rel="stylesheet" href="css\revolutionslider\settings.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="css\plugins-1.css?v=2.2">
    <!-- Main Styles -->
    <link rel="stylesheet" href="css\theme-1.css?v=2.2">
    <!-- Color Skins -->
    <link rel="stylesheet" href="css\skins\default.css">
    <!-- End Page Styles -->
    <!-- Page Styles -->
    <link rel="stylesheet" href="content\etna\css\etna.css">
    <!-- Fonts -->
    <!-- Page Styles -->
    <link rel="stylesheet" href="css\customTour.css">
    <!-- Fonts -->
    <style type="text/css">
    	img.p{

 border-radius: 100%; 
 font-size: large;
}
.button {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
    </style>
    <!-- End Page Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800|Playfair+Display:400i,700i" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60089402-1', 'auto');
        ga('send', 'pageview');

    </script>      
          
    <!-- Global site tag (gtag.js) - Google Ads: 940641073 -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-940641073"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'AW-940641073');
    </script>
      

</head>

<!-- BODY START -->
<body>

<!-- LOADER -->

<div class="page-loader bg-white">
    <div class="v-center t-center">
        <div class="spinner">
            <div class="spinner__item1 bg-dark"></div>
            <div class="spinner__item2 bg-dark"></div>
            <div class="spinner__item3 bg-dark"></div>
            <div class="spinner__item4 bg-dark"></div>
        </div>
    </div>
</div>

<!-- PAGETOP -->
<div id="pagetop" class="transparent">
    <div class="container-xl clearfix">
        <!-- Right, socials -->
        <!-- <div class="right clearfix">
            <a href="tel:+919898588838" class="colored-hover">+91 9898588838</a>
            <a href="tel:+919898404455" class="colored-hover">+91 9898404455</a>
            <a href="mailto:info@thedreamridersgroup.com" class="colored-hover" data-toggle="tooltip" data-placement="bottom" title="Send us an e-mail">info@thedreamridersgroup.com</a>
        </div> -->
    </div>
</div>
<!--END PAGETOP -->

<!-- NAVIGATION - Select nav color and offset -->
<nav id="navigation" class="dark-nav jump modern shrink" data-offset="55" style="max-height: 100px">
    <!-- Columns -->
    <div id="headerColor" class="columns clearfix container-lg">
        <!-- Logo -->
       <!--  <div class="logo">
            <a href="index.htm">
                <img src="dreamRiders\Dream Riders Logo 2.png" data-second-logo="dreamRiders/Dream Riders Logo 2.png" alt="Dream Riders Mototouring Website Logo">
            </a>
        </div> -->
        <!-- Navigation Menu -->
        <div class="nav-menu">
          <?php
          include"header.php";
          ?>
        </div>
        <!-- End Navigation Menu -->
    </div>
</nav>
<!-- CONTENT -->


<section id="home" class="t-center white fullwidth">
    <!-- Hero Slider -->

    <div class="hero-slider height-full custom-slider qdr-controls" data-slick='{"dots": true, "arrows": true, "autoplay": true, "autoplaySpeed": 6000, "pauseOnHover": false, "speed": 700, "draggable":false, "slidesToShow": 1, "slidesToScroll": 1, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}}]}'>
        <!-- Slide -->
        <div class="slide moving-container">
            <!-- Your Image -->
            <div class="slide-img bg-soft bg-soft-dark2" data-stellar-ratio="0.8">
                <div class="scale-timer" data-background="3.jpg"></div>
            </div>
             <div class="details">
                            <!-- Centered Container -->
                            <div class="container v-center">
                                <div class="skrollr moving" data-0="opacity:1;" data-200="opacity:0;">
                                    <div class="translatez-sm">
                                        <h2 class="playfair italic animated font-16-mobile" data-animation="fadeInUp" data-animation-delay="600">
                                            Ride the Royal Enfield on the highest passes of the world                                        </h2>
                                    </div>
                                    <div class="translatez-xs">
                                        <h1 class="bold-title mini-mt animated font-16-mobile" style="font-size: 4em" data-animation="fadeInUp" data-animation-delay="800">
                                            Let the adventure begin                                         </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <!-- End Details -->
        </div>
        <!-- End Slide -->
        <!-- Slide -->
        <div class="slide moving-container">
            <!-- Your Image -->
            <div class="slide-img bg-soft bg-soft-dark2" data-stellar-ratio="0.8">
                <div class="scale-timer" data-background="13.jpg"></div>
            </div>
            <!-- Details -->
                                            <!-- End Details -->
         <div class="details">
                            <!-- Centered Container -->
                            <div class="container v-center">
                                <div class="skrollr moving" data-0="opacity:1;" data-200="opacity:0;">
                                    <div class="translatez-sm">
                                        <h2 class="playfair italic animated font-16-mobile" data-animation="fadeInUp" data-animation-delay="600">
                                           Join as on the epic motorcycle tour                                       </h2>
                                    </div>
                                    <div class="translatez-xs">
                                        <h1 class="bold-title mini-mt animated font-16-mobile" style="font-size: 4em" data-animation="fadeInUp" data-animation-delay="800">
                                            Ride to the land of high passes                                       </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                                <!-- End Details -->
        </div>
    <!-- End Hero Slider -->
</section>

<form action="tsearch.php" method="post">
    <br><br>
  <center><select name="sort" required=""><option value disabled selected>Sort By</option>
    <option value="destination">Destination</option>
    <option value="name">Rider Name</option>
    
  </select>
  <input type="text" placeholder="search" name="search" required="">
  <button type="submit"><i class="fa fa-search"></i></button>
    </center>
</form>
<!-- END CONTENT -->

<!-- <form action="tsearch.php" method="post">
		<br><br>
	<center><select name="sort" required=""><option value disabled selected>Sort By</option>
		<option value="destination">Destination</option>
		<option value="name">Rider Name</option>
		
	</select>
	<input type="text" placeholder="search" name="search" required="">
  <button type="submit"><i class="fa fa-search"></i></button>
		</center>
</form> -->
<!-- END CONTENT -->
<?php
	//session_start();
include "dbconn.php";
$a=$_POST["sort"];
$b=$_POST["search"];


if($a=='destination')
{

  $sql="SELECT * FROM trip a,u_r_reg b where a.destination like '%$b%' and a.email=b.email";
}
else if($a=='name')
{
  $sql="SELECT * FROM trip a,u_r_reg b where b.name like '%$b%' and a.email=b.email";
}


$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         $bid=$row["trip_id"];
          $dest=strtoupper($row["destination"]);
           $start=strtoupper($row["starting_place"]);
            $sdate=strtotime($row["starting_date"]);
             $edate=strtotime($row["ending_date"]);
              $no=$row["no_of_person"];
               $description=$row["description"];
                $status=$row["status"];
                 $email=$row["email"];
                  $name=$row["name"];
                   $photo='../'.$row["photo"];
                   $ph=$row["phone"];
?>

<br><br><br><br><br><br><br><br><br>

<div id="etna_home_notes" class="bg-gray white bb-1 border-solid border-gray pb-sm-5">

    <div id="about" class="notes">

        <!-- Home big content -->
        <div class="home-content calculate-height clearfix">

            <!-- Left, animated area (will be same heighted with right area)-->
            <div class="left bg-soft-colored bg-soft bg-animated bg-scroll cover pt-sm-2" data-background="images/TotalJourney/ladak/WE.jpg">
                <!-- Vertical centered inner -->
               
               <div>
                    <!-- Title -->

                    <h2>
                      <img   src="<?php echo  $photo; ?>" alt="" width="300" height="300"/>
                      <br class="hidden-xs">
                        <br class="hidden-xs">
                    </h2>
                    <!-- Subtitle -->
                    <h4 class="xxs-my"><?php echo $name ?></h4>
                    <!-- Description -->
                    <p class="xxs-my font-17 normal">
                     
                    </p>
                </div>
            </div>
            <!-- End left area -->

            <!-- Right, big content (will be same heighted with left area) -->
            <div class="right bg-soft bg-soft-colored1 cover" data-background="images/TotalJourney/ladak/RT.jpg">
                <!-- Vertical Centered 2 column boxes -->
                <div class="content-boxes vertical-center qdr-col-4 gap-7 clearfix t-center">

                    <!-- Box -->
                    <!-- <a class="mb-40">
                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                        <h2 class="bold">Total Journey</h2>
                        <p>1150 Km</p>
                    </a> -->
                    <!-- Box -->
                     <a class="mb-40">
                        <i class="fa fa-map" aria-hidden="true"></i>
                        <h2>Destination</h2>
                        <p><?php echo $dest ?></p>
                    </a>
                    <a class="mb-40">
                        <i class="fa fa-flag-checkered" aria-hidden="true"></i>
                        <h2>Start Point</h2>
                        <p><?php echo $start ?></p>
                    </a>
                    <a class="mb-40">
                        <i class="fa fa-hourglass-2" aria-hidden="true"></i>
                        <h2>Duration</h2>
                        <?php
                         $t=date("d-m-Y");
                         
                         // if($t<=date("d-m-Y",$sdate) and $t<=date("d-m-Y",$edate))
                         // {
                         //  $status="Trip Started";
                         // }
                         // else if($t>=date("d-m-Y",$sdate) and $t>=date("d-m-Y",$edate))

                         // {
                         //  $status="Trip Started";
                         // }
                         // else if($t<=date("d-m-Y",$sdate) and $t<=date("d-m-Y",$edate))
                         // {
                         //  $status="Trip end";
                         // }
                         // if($t>=$sdate and $t>$edate)
                         // {
                         //  $status="Trip Started";
                         // }
                         
                         // else if($t>=$sdate and $t<=$edate)
                         // {
                         //  $status="Trip Started";
                         // }
                         
                          $status="Ready to move";
                         
                        ?>

                        <p><?php echo date("d-m-Y",$sdate) ?> to <?php echo date("d-m-Y",$edate) ?></p>
                    </a>

                   

                    <a class="mb-40">
                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                        <h2>Maximum Bikes</h2>
                        <p><?php
                          if($no!=0)
                          {

                         echo $no;
                     }
                     else
                     {
                      echo "Trip Booking Full";
                     }

                         ?></p>
                    </a>

                    

                    <!-- Box -->
                   <!--  <a class="mb-40">
                        <i class="fa fa-road" aria-hidden="true"></i>
                        <h2 class="bold">Riding Days</h2>
                        <p> <?php echo $description ?></p>
                    </a> -->

                    <!-- Box -->
                   <!--  <a class="mb-40">
                        <i class="fa fa-area-chart" aria-hidden="true"></i>
                        <h2>Altitude</h2>
                        <p>18,380 Ft</p>
                    </a> -->

                    <a class="mb-40">
                        <i class="fa fa-motorcycle" aria-hidden="true"></i>
                        <h2>Status</h2>
                        <p><?php echo $status?></p>
                        <p></p>
                    </a>

                </div>
                <!-- End Boxes -->
            </div>
            <!-- End Right area -->
        </div>
        <!-- End Big Content -->
    </div>
    <!-- End Notes Container -->

    <!-- About Notes -->
    <div class="about-notes container text-justify relative pb-sm-5">
        <h4 class="light gray7 pt-sm-1">
           <!--  Himalayan Motorcycle Tour -->
        </h4>
        <h1 class="light black">
            <?php echo $dest ?>
        </h1>
        <h4 class="light gray7 pt-sm-1"><?php echo $name ?></h4>
        <div class="title-strips strips-left text-justify"></div>
        <p class="font-20 gray7">
           <?php echo $description ?>
            </p>
<br>
    <p class="font-20 gray7">
      <?php
      if ($no!=0 and $status=='Trip Started' or $no==0 and $status=='Trip Started' )
      {
        echo "<font color='red'>Sorry,this trip is alredy started</font>";
      }
      elseif ($no!=0 and $status=='Trip end' or $no==0 and $status=='Trip end' )
      {
        echo "<font color='red'>Sorry,this trip is end</font>";
      }
      else if($no!=0)
      {
        ?>
         <!-- <?php echo $description ?> --><a class="button" href="uptrip.php?id=<?php echo $bid ?>&email=<?php echo $email ?>"><button class="button"><font color="white"> Join Now</font></button></a>
         <?php
      }
      
      else
      {
        echo "<font color='red'>Sorry,this trip is already full</font>";
        ?>
        <!-- <p>Sorry the trip is almost full</p> -->
        <?php
      }
      ?>
        </p>
    </div>
</div>


<!-- End Home Page Notes -->



       
<!-- End Content -->
<?php
}
}
else{
  echo "<h1>The trip is not available</h1>";
}
?>
<!-- CONTACT SECTION -->

<!-- END CONTACT SECTION -->



<!-- FOOTER -->

<footer id="footer" class="classic_footer">
    <!-- Container -->
    <div class="container footer-body">
        <div class="row clearfix">
            <!-- Column -->
            <div class="col-md-3 col-sm-6 col-xs-12 sm-mb-mobile">
                <!-- Title -->
               <?php
               include"footer.php";
               ?>
<!-- END FOOTER -->

<!-- Quick Contact Form
<div class="quick-contact-form border-colored">
    <h5 class="uppercase t-center extrabold">Drop us a message</h5>
    <p class="t-center normal">You're in the right place! Just drop us a message. How can we help?</p>

    <form class="quick_form" name="quick_form" method="post" action="php/quick-contact-form.php">

        <input type="text" name="qname" id="qname" required placeholder="Name" class="no-mt">

    <input type="number" name="qmobileNo" id="qmobileNo" required placeholder="Mobile No">
        <input type="email" name="qemail" id="qemail" required placeholder="E-Mail">

        <textarea name="qmessage" id="qmessage" required placeholder="Message"></textarea>

        <div class="g-recaptcha" data-sitekey="6Lc3Y3EUAAAAAJ7ksTc-QgQlw8sU5_jNSiAgGeTa"></div>
        <button type="submit" id="qsubmit" class="bg-colored white qdr-hover-6 extrabold">SEND</button>

    </form>

    <a href="contactUs.php" target="_blank"
       class="inline-block colored-hover uppercase extrabold h6 no-pm qdr-hover-5">Or see contact page</a>
     <a href="tel:+919898588838"
       class="inline-block colored-hover uppercase extrabold h6 no-pm qdr-hover-5">Call Us : +91 9898588838</a>
</div>

<a href="#" class="drop-msg click-effect dark-effect"><i class="fa fa-envelope-o"></i></a>
 Back To Top -->
<a id="back-to-top" href="#top"><i class="fa fa-angle-up"></i></a>


<!-- Messages for contact form -->
<div id="error_message" class="clearfix">
    <i class="fa fa-warning"></i>
    <span>Validation error occured. Please enter the fields and submit it again.</span>
</div>
<!-- Submit Message -->
<div id="submit_message" class="clearfix">
    <i class="fa fa-check"></i>
    <span>Thank You ! Your Data has been submitted.</span>
</div>


<!-- jQuery -->
<script type="text/javascript" src="js\jquery.min.js"></script>
<!-- Instafeed for Instagram Feed -->
<script src='https://www.google.com/recaptcha/api.js'></script>


<!-- Video Player -->
<script type="text/javascript" src="js\components\jquery.mb.YTPlayer.min.js"></script>
<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="js\revolutionslider\jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="js\revolutionslider\jquery.themepunch.tools.min.js"></script>
<!-- MAIN SCRIPTS - Classic scripts for all theme -->
<!-- PAGE OPTIONS - You can find special scripts for this version -->
<script type="text/javascript" src="content\etna\js\plugins.js"></script>

<!-- PAGE OPTIONS - You can find special scripts for this version -->
<script type="text/javascript" src="content\rise\js\plugins.js?v=2.1"></script>
<!-- END JS FILES -->
<!-- PAGE OPTIONS - You can find special scripts for this version -->
<script type="text/javascript" src="content\showcase-01\js\plugins.js"></script>
<!-- End JS Files -->
<!-- MAIN SCRIPTS - Classic scripts for all theme -->
<script type="text/javascript" src="js\scripts.js?v=2.2"></script>
<!-- END JS FILES -->
<script>
    $(document).ready(function () {
        $('.indian').show();
        $('.foriegner').hide();
        $('#switch').change(function () {
            if (this.checked) {
                $('.indian').hide();
                $('.foriegner').show();
            }
            else {
                $('.indian').show();
                $('.foriegner').hide();
            }
        });
    });
</script>
</body>
<!-- Body End -->
</html>