<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Njoy Trip a Travel Category Flat Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Njoy Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
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
/*p{
	font-size: larger;

}*/
.space{
	padding-left: 300px;
}
.vid{
	padding-left: 190px;

}
h3{
	font-weight:normal;
	color: black;
}
.cover{
	background-image: url("images/cover.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}
.mylinks{
	background-color:rgba(0, 0, 0, .075);
	padding-left: 60px;
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

body{
	font-size:normal;
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
	session_start();
include "dbconn.php";
$id=$_SESSION["email"];
$sql= "SELECT * FROM club_reg where email='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          $name=$row["clubname"];
          $place=$row["district"];
          $state=$row["state"];
           $c=$row["country"];
          $_SESSION["pid"]=$place;
          $_SESSION["sid"]=$c;
         
    }
} 
else {
    echo "0 results";
}

	?>
	<!-- banner -->
	<div class="my">
	<!--div class="banner">
		<!-- menu -->
			<div id="toggle_m_nav">
			  <div id="m_nav_menu" class="m_nav">
				<div class="m_nav_ham" id="m_ham_1"></div>
				<div class="m_nav_ham" id="m_ham_2"></div>
				<div class="m_nav_ham" id="m_ham_3"></div>
			  </div>
			</div>

		<?php
		include"header.php";
		?>
		<!-- menu -->
		<!--div class="container">
			<div class="agile-left">
				<p><!--i class="fa fa-map-marker" aria-hidden="true"--></i> </p>
			</div>
			<!--div class="w3l-banner-grids">
				<h1><a href="#">AMIGO RIDERS</h1>
				<div class="w3layouts-border"> </div>
				<p>THE EXPLORERS</p>
				<div class="w3-button">
					<!--ul>
						<li><a href="#" class="button1">About</a></li>
						<li><a href="#" class="button2">More</a></li>
					</ul-->
				</div>
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

	<!-- //banner -->
	<!-- welcome -->
	<!--div class="welcome"!-->
		<!--div class="container"-->
			<!--div class="w3ls-welcome-grids"-->



				<?php 
include "dbconn.php";
$query = $conn->query("SELECT photo FROM club_reg where email='$id'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = '../profile/'.$row["photo"];
        }
        }
        else{
        	echo "<img class='p' src='images/icon1.png'  width='300' height='300'/> ";
        } ?>
				<!--div class="col-md-4 w3l-welcome-left"-->
				<div class="cover">
					<div class="h">
				  	<img class="p" src="<?php echo $imageURL; ?>" alt="" width="200" height="200"/>
				<font color="white" size="5px"><br><?php echo $name ?></font><br>
					
				
			
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
 <font color="white">Lives in <?php echo $district;?>,<?php echo $state;?></font><br>
 <?php
 }
    }
}
}
?>
     
     	

 
</div>

	
</div>
				
				


			<!--form method="post" enctype="multipart/form-data">
    <h2>Update Profile Picture
    <input type="file" name="file">
    <input type="submit" name="submit" value="UPLOAD"></h2>
</form-->
<!--?php


$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "amigo";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
/*include 'upload.php';*/
$statusMsg = '';
$id=$_SESSION["email"];
// File upload path
if(isset($_FILES['file'])){
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("UPDATE  club_reg SET photo='$fileName' WHERE email='$id'");
            if($insert){

		//header("location:index.php");
               //header('location:../../web/index1.php');
                // echo "<script type='text/javascript'>alert('file uploaded');</script>";
                 //echo "<script type='text/javascript'>alert('$statusMsg\\n\\nUploads: $fileName\\nType: $fileType\\nStored in: uploads/$fileName');</script>";
            }else{
                $statusMsg = "File upload failed, please try again.";
                echo "<script type='text/javascript'>alert('$statusMsg\\n\\nUploads: $fileName\\nType: $fileType\\nStored in: uploads/$fileName');</script>";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
            echo "<script type='text/javascript'>alert('$statusMsg\\n\\nUploads: $fileName\\nType: $fileType\\nStored in: uploads/$fileName');</script>";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
        echo "<script type='text/javascript'>alert('$statusMsg\\n\\nUploads: $fileName\\nType: $fileType\\nStored in: uploads/$fileName');</script>";
    }
}else{
    $statusMsg = 'Please select a file to upload.';
    echo "<script type='text/javascript'>alert('$statusMsg\\n\\nUploads: $fileName\\nType: $fileType\\nStored in: uploads/$fileName');</script>";
}
						
								
	}	

		

?-->



	
				</div>
				


<div class="mylinks">


<div class="row abc" >

<!-- <div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="blog/blog1.php">
  <img class="card-img-top imgcard img-fluid" src="images/blog.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Blogs</header></center></p>

  </div>
</a>
</div>
</div> -->
<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<a class="l" href="../create blog/index.php">
  <img class="card-img-top imgcard" src="images/createblog.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center>Create Blog</center></p>
  </div>
</a>
</div>

</div>




<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<a class="l" href="blog/blogs/blogupdate.php">
  <img class="card-img-top imgcard" src="images/editblog.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center>Edit Blog</center></p>
  </div>
</a>
</div>

</div>
<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<a class="l" href="gallery/gallery.php">
  <img class="card-img-top imgcard" src="images/mygallery.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center>My Gallery</center></p>
  </div>
</a>
</div>

</div>

</div>

<div class="row abc" >

<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<a class="l" href="create event/index.php">
  <img class="card-img-top imgcard img-fluid" src="images/event1.jfif" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Event</header></center></p>

  </div>
</a>
</div>
</div>

<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<a class="l" href="myevent.php">
  <img class="card-img-top imgcard img-fluid" src="images/myevent.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>My Event</header></center></p>

  </div>
</a>
</div>
</div>

<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<a class="l" href="jevent.php">
  <img class="card-img-top imgcard img-fluid" src="images/memeber.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>My Squad</header></center></p>

  </div>
</a>
</div>
</div>

<!-- <div class="col-md-3">
	<div class="card" style="width: 18rem;">
		<a class="l" href="../login/logout.php">
  <img class="card-img-top imgcard img-fluid" src="images/logout.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Logout</header></center></p>

  </div>
</a>
</div>
</div> -->



</div>












































				<!--div class="col-md-4 w3l-welcome-img"-->
				
				</div>
				<!--div class="col-md-4 w3l-welcome-right">
					<h3>History of us</h3>
					<h5>Integer mollis porttitor nibh, id pellentesque mauris porta et.</h5>
					<p>Duis interdum malesuada nunc, nec vestibulum erat sagittis quis. Pellentesque imperdiet lorem ac auctor tempor. Donec convallis ligula eget mi consequat, sed euismod neque varius. Nulla eget risus nec ligula volutpat lacinia.<span>Integer eleifend nec ligula vitae feugiat. Nulla eleifend mauris et elementum placerat.</span></p>
					<div class="w3l-button">
						<a href="single.html">More</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div-->
	<!-- //welcome -->
	<!-- services --
	<div class="services">
		<div class="container">
			<div class="w3l-heading">
				<h3>Services</h3>
			</div>
			<div class="agileits-services">
				<div class="services-right-grids">
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-anchor" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et, pellentesque eget mi.</p>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-comment" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et, pellentesque eget mi.</p>
						</div>
					</div>
					<div class="col-sm-4 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-heartbeat" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et, pellentesque eget mi.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="services-right-grids">
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-magnet" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et, pellentesque eget mi.</p>
						</div>
					</div>
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-heartbeat" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et, pellentesque eget mi.</p>
						</div>
					</div>
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-asterisk" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et, pellentesque eget mi.</p>
						</div>
					</div>
					<div class="col-sm-3 services-right-grid">
						<div class="services-icon hvr-radial-in">
							<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						</div>
						<div class="services-icon-info">
							<h5>Phasellus suscipit</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci enim, posuere sed tincidunt et, pellentesque eget mi.</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- testimonial --
	<div class="testimonial jarallax">
		<div class="container">
			<div class="agileits-w3layouts-info">
				<div class="testimonial-grid">
					<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Donec feugiat tellus sem, laoreet iaculis orci lobortis vel. Sed sed luctus orci, at lacinia risus. Ut porttitor ante ac tincidunt elementum. Curabitur ex dolor, condimentum vitae nunc vel, pulvinar semper justo. Vestibulum et aliquet magna, maximus dapibus enim. Vestibulum ex lectus, posuere eu viverra at, mattis et enim. Nam efficitur sem et lectus fringilla, at pharetra nulla luctus. Nunc cursus, augue ac ultricies volutpat, neque erat congue justo, ac pretium tellus eros a neque. Integer ipsum sem, consectetur a mollis ac, cursus eu ipsum.</p>
											<h5>John Smith <span>- Founder</span></h5>
										</div>
									</li>
									<li>
										<div class="testimonial-top">
											<i class="fa fa-quote-right" aria-hidden="true"></i>
											<p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.Donec sed orci a dui aliquam tempor. Praesent in ipsum ut nunc porttitor lacinia.Donec eu sapien et arcu dictum rutrum.Ut laoreet vitae augue at accumsan. Nam pharetra sagittis purus et condimentum. Vestibulum cursus porttitor pretium.In egestas finibus rutrum. Nulla facilisi.</p>
											<h5>Divide Rule <span>- CEO</span></h5>
										</div>
									</li>
								</ul>
							</div>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });
							
								});
							 </script>
							<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<!--news--
	<div class="news-section" id="news">
		<div class="container">
			<div class="w3l-heading">
				<h3>Our News</h3>
			</div>
			<div class="news-left">			
				<div class="col-md-6 col-news-right">
						<div class="col-news-top">
							<a href="single.html" class="date-in button2">
								<img class="img-responsive mix-in" src="images/3.jpg" alt="">
								<div class="month-in">
									<div class="team-date">
										<span class="day">03</span>
										<span class="month">Jan</span>
										<span class="like">We Build your Dreams</span>
									</div>
								</div>
							</a>
							<div class="clearfix"> </div>
							<div class="col-bottom">
							<h4>Phasellus cursus ex eget varius mollis</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem  </p>
							<div class="wthree-news-button">
								<a href="single.html">More</a>
							</div>
						</div>
						</div>	
				</div>
				<div class="col-md-6 col-news">
						<div class="col-bottom two">
							<h4>Aenean sed fermentum ante</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem  </p>
							<div class="wthree-news-button">
								<a href="single.html">More</a>
							</div>
						</div>
						<div class="col-news-top">
						
							<a href="single.html" class="date-in button2">
								<img class="img-responsive mix-in" src="images/5.jpg" alt="">
								<div class="month-in">
									<div class="team-date">
										<span class="day">24</span>
										<span class="month">Sept</span>
										<span class="like">We Build your Dreams</span>
									</div>
								</div>
							</a>
							<div class="clearfix"> </div>
						</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//news-->
	<!-- news-letter --
	<div class="news-letter">
		<div class="container">
			<div class="w3l-heading">
				<h3>Subscribe Here</h3>
			</div>
			<div class="agileinfo-subscribe">
				<form action="#" method="post">
					<input type="text" placeholder="Name" name="Name"  required="">
					<input type="email" placeholder="Email" name="Email"  required="">
					<input type="submit" value="Subscribe">
					<div class="clearfix"> </div>
				</form>
				<h5>or</h5>
				<div class="agileits-social-grids">
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
	<!-- //news-letter -->
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
			</div-->
			<center>
			<?php
			include"fform.php";
			?></center>
			<?php
			include"footer.php";
			?>
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