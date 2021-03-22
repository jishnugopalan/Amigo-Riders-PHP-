<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
session_start();
  include "dbconn.php";
$id=$_SESSION["email"];
$sql4="UPDATE login SET online='1' where email='$id'";
if(mysqli_query($conn,$sql4))
{

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Njoy Trip a Travel Category Flat Bootstrap responsive Website Template | Home :: w3layouts</title>
<!-- <meta http-equiv="refresh" content="5"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Njoy Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
 <link href="css/video-js.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Rokkitt:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
 <script src="video.js"></script>
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>
<!-- menu -->
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
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
	font-weight: normal;
	color: white;
}
.cover{
	background-image: url("images/cover.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}
.h1{
	font-family: serif;
	color:white;
	font-size: bolder;
	background-color: gray;
}
/*.header{

	font-family: serif;
	color:red;
	font-size: bolder;
	background-image: url("images/video.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}*/
hr.new1 {
  border-top: 1px solid black;
}
mylinks{
	background-color: white;
}
.imgcard{
width: 300px;
height: 200px;
}
.abc{
	padding-top: 40px;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 40px;
}
header{
	font-size:17px;
	
	font-weight: bold;
}
.h{
	padding-top: 260px;
	padding-bottom: 20px;
	padding-left: 30px;

}
</style>



</head>
<body>



	<?php
	
	include "dbconn.php";


$sql= "SELECT * FROM u_r_reg where email='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          $name=$row["name"];
          $place=$row["district"];
          $state=$row["state"];
          $c=$row["country"];
          $_SESSION["pid"]=$place;
          $_SESSION["sid"]=$c;
          $_SESSION["state"]=$state;
    }
} 
else {
    echo "0 results";
}


	?>


	<!-- banner -->
	<!--div class="my">
	<div class="banner">
		<!-- menu -->
			<div id="toggle_m_nav">
			  <div id="m_nav_menu" class="m_nav">
				<div class="m_nav_ham" id="m_ham_1"></div>
				<div class="m_nav_ham" id="m_ham_2"></div>
				<div class="m_nav_ham" id="m_ham_3"></div>
			  </div>
			</div>

			<?php
			include "header1.php";
			?>
		<!-- menu -->
		<!--div class="container">
			<div class="agile-left">
				<!--p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 T.Globel Place,London</p-->
			</div>
			<!--div class="w3l-banner-grids">
				<h1><a href="index.html">AMIGO RIDERS</a></h1>
				<div class="w3layouts-border"> </div>
				<p>THE EXPLORERS</p>
				<div class="w3-button">
					<!--ul>
						<li><a href="about.html" class="button1">About</a></li>
						<li><a href="single.html" class="button2">More</a></li>
					</ul>
				</div-->
				<!--div class="agileinfo-social-grids">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

	<!-- //banner -->
	<!-- welcome -->
	<!--div class="welcome">
		<div class="container">
			<div class="w3ls-welcome-grids">
				<div class="col-md-4 w3l-welcome-left"-->

				<?php 
include "dbconn.php";

$query = $conn->query("SELECT photo FROM u_r_reg where email='$id'");       

if($query->num_rows > 0){

    while($row = $query->fetch_assoc()){
    
        $imageURL = '../profile/'.$row["photo"];
       
        
    }
    
        }
        
        else{
        	echo "";
        } 
    
?>




<!-- <div class="h1"><center>AMIGO RIDERS<br><h4><font color="white">the explorers</font></h4><hr class="new1"></center></div> -->
<div class="cover">

<div class="h">
	
	<a href="<?php echo $imageURL; ?>"></a>
<font color="black"><img class="p"  src="<?php echo  $imageURL; ?>" alt="" width="200" height="200"/>
	<b><h3><?php echo $name ?></h3></b></font>


<?php
include "dbconn.php";
$p=$_SESSION["pid"];
$s=$_SESSION["sid"];

$sql1="SELECT * FROM district where dis_id='$p'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
	$sql2="SELECT * FROM country where country_id='$s'";
	$result2 = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($result2) > 0) {
    	while($row1 = mysqli_fetch_assoc($result2)) {
    	$state=$row1["c_name"];
    
	while($row = mysqli_fetch_assoc($result)) {
	  $district=$row["d_name"];


 ?>
 <font color="white"><h3>Lives in <?php echo $district;?>,<?php echo $state;?></h3></font>
 <?php
 }
    }
}
}
?>
<h1 id="c2"></h1>
</div></div>           
					
				
				

				
				


 <!-- <a class="l" href=<?php echo "'../upload image/upload.php'" ?> ><img src="images/cam.png" width="113" height="113">add image</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
 <a class="l" href=<?php echo "'../upload video/index.php'" ?> ><img src="images/vid.png" width="110" height="110">add video</a><br> -->
 

 <!-- <a class="l" href=<?php echo "'profile.php'" ?> ><img src="" width="113" height="113" alt="">See About Yourself</a><br><br>
 <a class="l" href=<?php echo "'profile.php'" ?> ><img src="" width="113" height="113" alt="">Update Profile</a> -->
</div>

	
</div>
				</div>

	<div class="mylinks">


<div class="row abc" >

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="blog/blog1.php">
  <img class="card-img-top imgcard img-fluid" src="images/blog.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Blogs</header></center></p>

  </div>
</a>
</div>

</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="gallery/gallery.php">
  <img class="card-img-top imgcard" src="images/mygallery.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>My Gallery</header></center></p>
  </div>
</a>
</div>

</div>
<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="../create blog/index.php">
  <img class="card-img-top imgcard" src="images/createblog.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Create Blog</header></center></p>
  </div>
</a>
</div>

</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="blog/blogs/blogupdate.php">
  <img class="card-img-top imgcard" src="images/editblog.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Edit Blog</header></center></p>
  </div>
</a>
</div>

</div>
</div>
<div class="row abc" >

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="Trip Create Form/index.php">
  <img class="card-img-top imgcard" src="images/goride.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Create Trips</header></center></p>
  </div>
</a>
</div>

</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="tripedit.php">
  <img class="card-img-top imgcard" src="images/myrides.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>My Rides</header></center></p>
  </div>
</a>
</div>

</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="mytrip.php">
  <img class="card-img-top imgcard" src="images/myride2.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>My Squad</header></center></p>
  </div>
</a>
</div>

</div>


<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="Bike Selling Form/index.php">
  <img class="card-img-top imgcard" src="images/selling.jfif" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Sell Bikes<header></center></p>
  </div>
</a>
</div>

</div>







</div>

<div class="row abc" >
	<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="selling.php">
  <img class="card-img-top imgcard" src="images/settings.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>My Selling<header></center></p>
  </div>
</a>
</div>

</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="event.php">
  <img class="card-img-top imgcard" src="images/events.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Events<header></center></p>
  </div>
</a>
</div>

</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="myevent.php">
  <img class="card-img-top imgcard" src="images/stunt.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>My Events<header></center></p>
  </div>
</a>
</div>

</div>

<div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="clubblog/blog1.php">
  <img class="card-img-top imgcard" src="images/clubupdates.png" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Club Updates<header></center></p>
  </div>
</a>
</div>

</div>





</div>























	</div>
				<!-- <div class="space">	
					<a class="l" href='blog/blog1.php'><h3><img src='images/blog-icon-transparent-1.jpg' width='20' height='20'><font color="red">Blogs</h3></font></a>
					<a class="l" href='blog/blogs/blogupdate.php'><h3><img src='images/blog-icon-transparent-1.jpg' width='20' height='20'><font color="red">My Blogs</font></h3></a>
					<a class="l" href='gallery.php'><h3><img src='images/how-do-i-edit-a-png-file.png' width='30' height='30'><font color="red">Gallery</font></h3></a>
                     <a class="l" href='chat/index.php'><h3><img src='images/images.png' width='20' height='20'><font color="red"> Chats</font></h3></a>
				<a class="l" href='notification.php'><h3><img src='images/Notification-512.png' width='20' height='20'><font color="red">Notification</font></h3></a>
				<a class="l" href='profile.php'><h3><img src='images/logout.png' width='20' height='20'><font color="red">Edit profile</font></h3></a>
				<a class="l" href='settings.php'><h3><img src="images/settings-icon-transparent-27.jpg" width="30" height="30"><font color="red">Update password</font></h3></a>
				<a class="l" href='Trip Create Form/index.php'><h3><img src="images/clipart-road-route-7.png" width="30" height="30"><font color="red">Go ride</font></h3></a>
				<a class="l" href='trip.php'><h3><img src="images/motorcycle-icon-13.jpg" width="30" height="30"><font color="red">My rides</font></h3></a>
				<a class="l" href='Bike Selling Form/index.php'><h3><img src="images/bike.png" width="30" height="30"><font color="red"><font color="red">Sell Bikes</font></h3></a>
				<a class="l" href='buybikes.php'><h3><img src="images/bike.png" width="30" height="30"><font color="red"><font color="red">My Sellings</font></h3></a>
				<a class="l" href='event.php'><h3><img src="images/bike.png" width="30" height="30"><font color="red"><font color="red">Events</font></h3></a>
				<a class="l" href='myevent.php'><h3><img src="images/bike.png" width="30" height="30"><font color="red"><font color="red">My Events</font></h3></a> -->



 





				



                      
                       
                     
  <div class="links">
	<br>
	<center>
<?php
include"fform.php";
?>
</center>

<!-- <font color="white"><h2>My feedbacks</h2></font>
<ol>
<?php

$sql="SELECT * FROM feedback WHERE email='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         $fcontent=$row["fcontent"];
         $fdate=$row["fdate"];


?>

<li><font color="white"><p><?php echo $fcontent ?></p></font><br>
<font color="yellow"><?php echo $fdate ?></font></li>

<?php
}
}
?>
</ol>
</div>

</div> -->


<?php
include"footer.php";
?>

	<!-- footer --
	<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Address</h4>
					</div>
					<div class="footer-grid-info">
						<p>Eiusmod Tempor inc
							<span>St Dolore Place,Kingsport 56777.</span>
						</p>
						<p class="phone">Phone : +1 123 456 789
							<span>Email : <a href="mailto:example@email.com">mail@example.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navigation</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="about.html">About</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="icons.html">Icons</a></li>
							<li><a href="codes.html">Codes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Latest Posts</h4>
					</div>
					<div class="w3agile_footer_grid_list">
						<ul>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Vestibulum ante ipsum</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Phasellus at eros</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Mauris eleifend aliquet</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Aliquam vitae tristique</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Pellentesque lobortis</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Class aptent taciti</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Twitter Posts</h4>
					</div>
					<div class="w3agile_footer_grid_list w3agile-post">
						<ul>
							<li>Ut aut reiciendis voluptatibus <a href="#">http://example.com</a> alias, ut aut.
								<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
							<li>Itaque earum rerum hic tenetur a sapiente <a href="#">http://example.com</a> ut aut.
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2017 Njoy Trip . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
</body>	
</html>