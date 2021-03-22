
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Home | Amgio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Outing Travel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- /font files -->
<!-- js files -->
<script src="js/modernizr.custom.js"></script>
<style type="text/css">
	.my{
		background-image: url("images/1.jpg");
		background-repeat: no-repeat;
	}
	img.p{

 border-radius: 100%; 
 font-size: large;
}
input[type="file"]{
	font-size:x-large;
}
input[type="submit"]{
	font-size: x-large;
}
.blog{
	border-style: solid;
	border-radius: 10px;
}
p{
	font-size: larger;

}

a:link{
	color: black;
	
}
a:visited{
	color:black;
}
 a.l{
      text-decoration: none
      
     }
   
.footer {
  background-color: #0099cc;
  color: #ffffff;
  text-align: center;
  font-size: 12px;
  padding: 15px;
}
.space{
	padding-left: 300px;
}
.vid{
	padding-left: 190px;

}
h3{
	font-weight: bold;
	color: white;
}
.cover{
	background-image: url("images/cover.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}
</style>
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<div class="container">
		<div class="row">
			<center><div id="navbar" class="navbar-collapse collapse navbar-center">
					<ul class="nav navbar-nav">
						<li></li>
						
					</ul>
				</div></center>
<section class="our-gallery" id="gallery">
<h4 class="text-center"><font color="blue"><a href="../index.php"><span data-hover="Home"><font color="blue">Home</font></span></a></font></h4>
	<h3 class="text-center"><font color="blue">Our Gallery</font></h3>
	<p class="text-center">Here the photos and videos that you are uploaded</p>
	<div class="container">
<?php

include "dbconn.php";
$id=$_SESSION["email"];
$query = $conn->query("SELECT * FROM blog where filetype='image' and email='$id'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = '../../create blog/'.$row["url"]; 


							
	?>

	
		<img src="<?php echo $imageURL; ?>" data-darkbox="<?php echo $imageURL; ?>" data-darkbox-description="<b></b><br> "class="img-responsive">
        
	


	<?php
}
}
else
echo "No images";
?>
</div>
</section>
<!-- /Gallery Section -->
<!-- Testimonials -->
<div class="container">

					
							<?php
								$query = $conn->query("SELECT * FROM blog where filetype='video' and email='$id'");
								if($query->num_rows > 0){
								while($row = $query->fetch_assoc()){
								//$video_id = $row['item_id'];
							?>
							 <!--video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
      poster="http://video-js.zencoder.com/oceans-clip.png"
      data-setup="{}"-->
      <video class="v" controls  width="400" height="400">
        <source src="../../create blog/<?php echo $row['url']; ?>" type='video/mp4' /> 
							<!--video controls  width="400" height="400">
        
				<source src="upload video/upload/<?php echo $row['url']; ?>" type='video/mp4'>
				</video-->
								
							
						</video>
						<?php
							}
						}
							else
							echo "No videos"; 
							?>
						</div>
					</div>
	
		<center><p>© 2019 Amigo Riders. All Rights Reserved | Design by <a href="index.html" target="">amigoriders@gmail.com</a></p></center>
	
</section>
<!-- /Footer Section -->
<!-- Back To Top -->
<a href="#0" class="cd-top">Top</a>
<!-- /Back To Top -->

<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<!-- js for gallery -->
<script src="js/darkbox.js"></script>
<!-- /js for gallery -->
<!-- js for back to top -->
<script src="js/main.js"></script>
<!-- /js for back to top -->
<!-- js for nav-smooth scroll -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<!-- /js for nav-smooth scroll -->
<!-- js for slide animations -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<!-- /js for slide animations -->
<!-- /js files -->
</body>
</html>
