<?php
 session_start();
$id=$_SESSION["email"];
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>The never resting travel bug in you</title>
    <meta name="description" content="">
    <!--Keywords -->
    <link rel="apple-touch-icon" sizes="57x57" href="..\apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="..\apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="..\apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="..\apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="..\apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="..\apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="..\apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="..\apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="..\apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="..\android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="..\favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="..\favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="..\favicon-16x16.png">
    <link rel="manifest" href="..\manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <meta name="keywords" content="">
    <meta name="author" content="Finserve Infotech">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">
    <!--Favicon -->

    <!-- Apple Touch Icon -->


    <!-- CSS Files -->
    <link rel="stylesheet" href="..\css\plugins-1.css?v=2.2">
    <!-- Main Styles -->

    <link rel="stylesheet" href="..\css\theme-1.css?v=2.2">
    <!-- Color Skins -->
    <link rel="stylesheet" href="..\css\skins\default.css">

    <link rel="stylesheet" href="..\css\customIndex.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
<style type="text/css">
    img.p{

 border-radius: 100%; 
 font-size: large;
}
textarea{

/*border-style: solid;*/
color:black;
background-color: lightblue;
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60089402-1', 'auto');
        ga('send', 'pageview');


function ajaxFunction(bid) {
    var e=document.getElementById('eid').value;
    $.ajax({
    type: "POST",
    url: "post.php",
    data:{
          bid:bid,
          eid:e
         },
    success: function(data){
        $("#like").html(data);
        document.getElementById('like').innerHTML = x.responseText;
        //getCity();
    }
    });
}
function getComment(bid) {
    //noConflict();
    //console.log()
        // var f=document.getElementById('sid_'+bid).value;
         var g=document.getElementById('c').value;
         var e=document.getElementById('eid').value;
         
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "comment.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            sid:bid,
            com:g,
            eid:e
        },
      success: function(data){
        $("#comment").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});

      

       }

       function delComment(bid) {
    //noConflict();
    //console.log()
        // var f=document.getElementById('sid_'+bid).value;
         //var g=document.getElementById('c').value;
         //var e=document.getElementById('eid').value;
         
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "delcomment.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            sid:bid
            
            
        },
      success: function(data){
        $("#del").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});

      

       }
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
       <!--  <div class="right clearfix">
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
        <!-- <div class="logo">
            <a href="..\index.html">
                <img src="..\dreamRiders\Dream Riders Logo 2.png" data-second-logo="../../dreamRiders/Dream Riders Logo 2.png" alt="Dream Riders Mototouring Website Logo">
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

<!-- Page Title -->

<section id="home" class="lg-py white fullwidth">
    <!-- Background image - you can choose parallax ratio and offset -->
    <div class="bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="about.jpg"></div>
    <!-- Container -->
     <?php
include "dbconn.php";
$b=$_GET["bid"];
$sql="SELECT * FROM blog a,club_reg b where a.email=b.email and a.blog_id='$b'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          $bid=$row["blog_id"];
          $head=$row["blog_header"];
          $blog=$row["blog_content"];
          $date=$row["blog_date"];
          $name=$row["clubname"];
          $type=$row["filetype"];
          $photo='../../'.$row["photo"];
          $email=$row["email"];
  
?>
    <div class="container relative">
        <div class="t-center skrollr" data-0="opacity:1;" data-400="opacity:0;">
            <!-- Play Icon -->
            <h1 class="bold-title lh-sm mini-mt">
               <br class="hidden-xs">
            </h1>
        </div>
    </div>
    <!-- End Container -->
</section>
<!-- End Page Title -->


<!-- Post -->

<section class="clearfix zi-1 relative fullwidth o-hidden">
    <!-- Row -->

    <div class="row xxs-px-mobile clearfix calculate-height">
        <!-- Left Post Details -->
        <div class="col-lg-6 offset-lg-2 col-12 py sm-pr xxs-px-mobile bg-cover bg-center bg-soft bg-soft-white6 height-auto-mobile" data-background="images/backgrounds/background_22.jpg">
            <!-- Text Block -->
            <div class="container gray7 zi-4">
               
 <h3><img class='p' src='<?php echo $photo?>' width='150' height='150'><font color="black"> <?php echo $name?></font> </h3><br>


<font color="black" size="5px"> <?php echo $head ?></font><br>
            
                <!-- Slider -->
               <?php
                                                    if($type=='image')
          {
            //echo "<h3>Uploaded an image</h3>";
            $image='../../../create blog/'.$row["url"];
          echo "<img src='$image' width='500'>";
          echo"<br>";
          
          }
                         if($type=='video')
          {


                 
          echo $blog;
           echo"<br>";
                        
             $sql2="SELECT COUNT(*) FROM likes where item_id='$bid' and item_name='blog'";
                                            $result2=mysqli_query($conn,$sql2);
          if(mysqli_num_rows($result2) > 0)
          {
            while($row2=mysqli_fetch_assoc($result2))
            {
                $n=$row2["COUNT(*)"];
            }
        }
        echo "<font color='black'>",$n,"likes</font>";
            //echo "<h3>Uploaded a video</h3>";
           echo "<div id='like'></div>
                                            <button  onclick='ajaxFunction(",$bid,")'><font color='red'>Like</font></button>";
                                           
                                            $video='../../../create blog/'.$row["url"];
                                            echo"<br>";
             $sql2="SELECT COUNT(*) FROM comment where sell_id='$bid' and ctype='blog'";
                                            $result2=mysqli_query($conn,$sql2);
          if(mysqli_num_rows($result2) > 0)
          {
            while($row2=mysqli_fetch_assoc($result2))
            {
                $n1=$row2["COUNT(*)"];
            }
        }
             echo "<font color='black'>",$n1,"comments</font>";

                                    echo "<div id='comment'></div>
                                                <textarea name='comment' placeholder='write a comment' id='c' required='' rows='5' cols='30'></textarea><br><button type='submit' onclick='getComment(",$bid,")'><font color='red'>comment</font></button><br>";

            echo "<video controls  width='500' height='300'><source src='$video' type='video/mp4' />";
          
          }
          ?>
              <!--   <div class="custom-slider container no-px block-img qdr-controls c-move sm-mt border-5 border-gray" data-slick='{"arrows":true, "fade": true, "draggable":true, "slidesToShow": 1, "slidesToScroll": 1, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 1}},{"breakpoint": 600,"settings":{"slidesToShow": 1}}]}'>
                    <div><img src="..\adminwebsite\uploads\profile\2\Never Resting.jpg"></div>                </div> -->
                <!-- End Slider -->
                <h3 class="bold-subtitle dark sm-mt">
                </h3>
                <p class="xs-mt">
                    <p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="background-color:white"><span style="color:#777777"><?php echo $blog; ?></span></span></span></p>
                    
                    <?php
                                            $sql2="SELECT COUNT(*) FROM likes where item_id='$bid' and item_name='blog'";
                                            $result2=mysqli_query($conn,$sql2);
          if(mysqli_num_rows($result2) > 0)
          {
            while($row2=mysqli_fetch_assoc($result2))
            {
                $n=$row2["COUNT(*)"];
            }
        }
                                            ?>
                                            <font color="black"><?php echo $n;?>likes</font>
                                             <input type="hidden" id="eid" value='<?php echo $email ?>'>
                                            <div id="like"></div>
                                            <button  onclick="ajaxFunction(<?php echo $bid ?>)"><font color="red">Like</font></button>
                                            
                                                  <?php
                                            $sql2="SELECT COUNT(*) FROM comment where sell_id='$bid' and ctype='blog'";
                                            $result2=mysqli_query($conn,$sql2);
          if(mysqli_num_rows($result2) > 0)
          {
            while($row2=mysqli_fetch_assoc($result2))
            {
                $n1=$row2["COUNT(*)"];
            }
        }
        ?>                                      
                                                <br><font color="black"><?php echo $n1;?>Comments</font>
                                                <input type="hidden" id="eid" value='<?php echo $email ?>'>
                                                <div id="comment"></div>
                                                
                                                <textarea name="comment" placeholder="write a comment" id="c"  rows="5" cols="30"></textarea><br><button type="submit" onclick="getComment(<?php echo $bid ?>)"><font color="red">comment</font></button>
                                            
                                 
                                            
                                           <!--  <a href="post.php?bid=<?php echo $bid ?>"><button>like
                                            </button></a> -->
<!-- 
<p style="margin-left:0in; margin-right:0in">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="background-color:white"><span style="color:#777777">The existence of early humans, humbled by the mediocrity of resources and information clustered limited around them, and any chidings of nature and adversity were well escaped through migration. They were constant travellers, settled at heart, but nomads at the soul. Travelling wasn’t a recreational activity for them, just a way of getting rid of the presentiments. If you’d look carefully, you will find many undeceiving differences among any species and their ancestors, some were vegetarian and tall, some lanky and carnivorous, some could fly while some just swam. What made the grandeur of evolution come true? Travelling, the courage of hastening their bonds with places and choosing people as home over places. </span></span></span></p>

<p style="margin-left:0in; margin-right:0in">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="background-color:white"><span style="color:#777777">Ages have passed, and what began as biomolecules is now termed life, and its variations and shades are no limited, they are vast, just like the tranquil oceans and the folded mountains. What started as tentacles changed into wings, and to limbs, incubated beautifully and safely through travelling. The Caterpillar would have remained a caterpillar if it didn’t want to slide through the rainbows, the snakes would have, most probably remained worm-like and submerged. But, no, life wanted to evolve and so it travelled, it set out on numerous journeys, falling and learning, running and flying.</span></span></span></p>

<blockquote>
<h2 style="font-style:italic"><span style="font-size:12pt"><span style="background-color:white"><span style="color:#777777">The life that chose to stay, to hold itself smitten within the boundaries evolved, but ceased to grow. </span></span></span></h2>
</blockquote>

<p style="margin-left:0in; margin-right:0in">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="background-color:white"><span style="color:#777777">The species that were isolated turned scathe resistant towards their own ancestors, they could no longer connect or mate. They have evolved, but differently. Think of the cannibals, no, not the zombies you watch in the movies, the real cannibals, the people living like early humans in the dense forests, like those in Andaman. Yes, they stayed intact to the splendor of nature but their roots refused to grow, and what’s the obvious consequence? They are shades different from you, even the stable civilization has been a result of the unstable movements. You are different because your ancestors travelled, and theirs stayed confined.</span></span></span></p>

<p style="margin-left:0in; margin-right:0in">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="background-color:white"><span style="color:#777777">Travelling is growing, it is developing, it is being a part of the bigger world and it is for good. For a while, we forget about our routines and habits and get to see other aspects of ourselves. We evolve, and often for good. From being afraid of the beasts to taming the lions, we have come way farther than what we could have imagined. Never take the halt, man is no amphibian but we have the potential and knowledge that enables us to ride the depths and swim the heights. This knowledge wasn’t bestowed upon us for staying stagnant, had it been so, Eve would have never demanded the apple and we would have had the heavens forever. But maybe, we were meant to create a better heaven than what was gifted to us.</span></span></span></p>

<p style="margin-left:0in; margin-right:0in">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="background-color:white"><span style="color:#777777">Travel nearby, settle after miles,</span></span></span></p>

<p style="margin-left:0in; margin-right:0in">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="background-color:white"><span style="color:#777777">Travel to the heights, but choose the depths,</span></span></span></p>

<p style="margin-left:0in; margin-right:0in">&nbsp;</p>

<p style="margin-left:0in; margin-right:0in"><span style="font-size:12pt"><span style="background-color:white"><span style="color:#777777">For if you don’t, life is still limited to biomolecules.</span></span></span></p> -->
                
                <!-- subtitle -->
            </div>
            <!-- End Text Block -->

                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox pt-4"></div>
            

        </div>
        <?php
            }
  }
  ?>
        <!-- End Left Post Details -->

        <!-- Sidebar -->
        <div class="col-lg-4 col-12 clearfix bg-gray bl-1 border-gray1 bs-xl py height-auto-mobile">
            <aside class="sidemenu font-14 col-md-6">
                <!-- Widget -->
                <div class="widget">
                    <h5 class="widget-title bold-subtitle">Comments</h5>
                    <ul class="nav-list bold-subtitle">
                        <?php
                                         $sql4="SELECT * FROM comment a,u_r_reg b where sell_id='$bid'and a.email=b.email and ctype='blog'";
          $result1=mysqli_query($conn,$sql4);
          if(mysqli_num_rows($result1) > 0)
          {
            while($row1=mysqli_fetch_assoc($result1))
            {
                $photo='../../../profile/'.$row1["photo"];
              $com=$row1["content"];
              $name=$row1["name"];  
              $cid=$row1["item_id"]; 
              $cemail=$row1["email"];
              ?>                                    
              <hr>  
                                                   <li> <ul>

                                                    <li><img class="p"  src="<?php echo  $photo; ?>" alt="" width="75" height="75"/><?php echo $name ?></li>
                                                          <li></li>
                                                    <li><?php echo $com ?></li>
                                                   <!--  <li><?php echo $cemail ?></li> -->
                                                   
                                                    <?php

                                                     if($cemail==$id)
                                                     {
                                                    ?>
                                                    <li><input type="button" value="Delete" onclick="delComment(<?php echo $cid ?>)"><div id="del"></div></li>
                                                    <?php
                                                  }
                                                  ?>
                                                  
                                                </ul>
                                            </li>
                                            <hr>
                                                    
                                                    <?php
                                                }
                                            }
                                            ?>
                                             
                                            </ul>
                </div>
            </aside>
        </div>
        <!-- End Sidebar -->

    </div>
    <!-- End Row -->
</section>
<!-- End Post -->

<!-- Recent Posts -->

<!-- End Recent Posts -->




<!-- FOOTER -->

<footer id="footer" class="classic_footer">
    <!-- Container --
    <div class="container footer-body">
        <div class="row clearfix">
            <!-- Column --
            <div class="col-md-3 col-sm-6 col-xs-12 sm-mb-mobile">
                <!-- Title --
                <h5 class="uppercase xxs-mb white extrabold colored-hover"><i class="fa fa-map-marker mini-mr"></i>OUR ADDRESS</h5>
                <p class="mini-mt gray3">Dream Riders Motortouring LLP, <br class="hidden-xs">Nr. Motibaug Party Plot,<br class="hidden-xs">In Lane Of Monte Cristo Banquet,<br class="hidden-xs">Sindhu Bhavan Road, <br class="hidden-xs"> Ahmedabad, Gujarat - 380054, India.</p>
                <br class="hidden-xs">
				<!-- Google Map --
                <h5 class="uppercase xxs-mb white extrabold colored-hover"><i class="fa fa-map-pin mini-mr"></i><a href="https://goo.gl/maps/7f25MJMuJTR2" target="_blank">
                    Find us on Google Map
                    </a></h5>


            </div>
            <!-- Column --
            <div class="col-md-3 col-sm-6 col-xs-12 all-block-links sm-mb-mobile">
                <h5 class="uppercase xxs-mb white colored-hover extrabold"><i class="fa fa-motorcycle mini-mr"></i>Motorcycle Tours</h5>
                <!-- You can edit footer-news.html file in js/ajax folder. Will be changed on all website --
                <a href="..\manaliToSrinagar.html" class="underline-hover gray3 colored-hover">Manali - Leh - Srinagar</a>
                <a href="..\srinagarToManali.html" class="underline-hover gray3 colored-hover">Srinagar - Leh - Manali</a>
                <a href="..\manaliPangongLeh.html" class="underline-hover gray3 colored-hover">Manali - Pangong - Leh</a>
                <a href="..\lehPangongManali.html" class="underline-hover gray3 colored-hover">Leh - Pangong - Manali</a>
                <a href="..\lehToLeh.html" class="underline-hover gray3 colored-hover">Leh - Pangong - Leh</a>
                <a href="..\spiti.html" class="underline-hover gray3 colored-hover">Spiti Tour</a>
                <a href="..\bhutanQuest.html" class="underline-hover gray3 colored-hover">Bhutan Tour</a>
                <a href="..\sikkimTour.html" class="underline-hover gray3 colored-hover">Sikkim Tour</a>
                <a href="..\sikkimBhutanTour.html" class="underline-hover gray3 colored-hover">Sikkim Bhutan Tour</a>
                <a href="..\rannOfKutchSix.html" class="underline-hover gray3 colored-hover">Rann Of kutch Tour</a>
                <a href="..\rajasthan.html" class="underline-hover gray3 colored-hover">Rajasthan Tour</a>
            </div>
            <!-- End Column -->
            <!-- Column --
            <div class="col-md-3 col-sm-6 col-xs-12 all-block-links sm-mb-mobile">
                <h5 class="uppercase xxs-mb white colored-hover extrabold"><i class="fa fa-crosshairs mini-mr"></i>Other Useful Pages </h5>

                <!-- Clients Slider one - You can find details in footer-client-comments.html file, #post1 div -->
                <!-- When you edit ajax file, the details will be changed on all website -->
                <!-- Instagram Feed - You can create a Client ID on here: https://instagram.com/developer/
                        And get your access token on here: https://instagram.com/developer/authentication/ -->
					<!--<div id="instafeed" class="sm-mt qdr-col-3 gap-2" data-count="6" data-userid="1331980082" data-clientid="ab902cc9c01f4f9fba10d2eb33574ee1" data-accesstoken="1331980082.ab902cc.a2462c2ae7a54a858fb0519b8a365830"><div class="will-remove"><img src="images/loader1.gif" alt="instagram loader"></div></div>
                    <!-- Sub Title --
                <a href="..\dreamRiderCalender.html" class="underline-hover white colored-hover">Tour Calender</a>
                <a href="..\customisedTour.html" class="underline-hover white colored-hover">Customised Tour</a>
                <a href="..\blog.html" class="underline-hover white colored-hover">Blogs</a>
                <a href="..\dreamRidersGallery.html" class="underline-hover white colored-hover">Images</a>
                <a href="..\tourVideo.html" class="underline-hover white colored-hover">Videos</a>
                <a href="..\bookTour.html" class="underline-hover white colored-hover">Book Tour</a>
                <a href="..\dreamRiderTestimonials.html" class="underline-hover white colored-hover">Testimonial</a>
                <a href="..\aboutUs.html" class="underline-hover white colored-hover">About Us</a>
                <a href="..\contactUs.html" class="underline-hover white colored-hover">Contact Us</a>
				<!-- Sub Title -->
            </div>
            <!-- End Column -->
            <!-- Column --
            <div class="col-md-3 col-sm-6 col-xs-12">
                <!-- Title -->
              <?php
              include"footer.php";
              ?>
<!-- END FOOTER -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5cbc036c4f6cdcc6"></script>

<!-- jQuery -->
<script type="text/javascript" src="..\js\jquery.min.js"></script>
<!-- Instafeed for Instagram Feed -->
<!-- MAIN SCRIPTS - Classic scripts for all theme -->
<script type="text/javascript" src="..\js\scripts.js?v=2.2"></script>
<!-- END JS FILES -->

</body>
<!-- Body End -->
</html>
