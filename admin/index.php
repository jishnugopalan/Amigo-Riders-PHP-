<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include"dbconn.php";
$sql="SELECT count(admin_s) from selling where admin_s='n'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$s=$row["count(admin_s)"];
	}
}

$sql1="SELECT count(admin_s) from event where admin_s='n'";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
	while($row = mysqli_fetch_assoc($result1)) {
		$e=$row["count(admin_s)"];
	}
}


$sql2="SELECT count(admin_s) from trip where admin_s='n'";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	while($row = mysqli_fetch_assoc($result2)) {
		$t=$row["count(admin_s)"];
	}
}



	?>

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


.mylinks{
	background-color:rgba(0, 0, 0, .075);
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
a:link{
	color: black;
	
}
a:visited{
	color:black;
}
 a.l{
      text-decoration: none
      
     }


.view{
	padding:80px;
}
button{
	background-size: larger;
}
header{
	font-size: large;
}
</style>



</head>
<body>

<!-- <audio src="images/notification_bell2.mp3" id="my_audio"></audio>
<script type="text/javascript">
    window.onload=function(){
      document.getElementById("my_audio").play();
    }
  </script> -->
	<?php
	

	?>


	<!-- banner -->
	<div class="my">
	<div class="banner">
		<!-- menu -->
			<div id="toggle_m_nav">
			  <div id="m_nav_menu" class="m_nav">
				<div class="m_nav_ham" id="m_ham_1"></div>
				<div class="m_nav_ham" id="m_ham_2"></div>
				<div class="m_nav_ham" id="m_ham_3"></div>
			  </div>
			</div>

			<div id="m_nav_container" class="m_nav">
			 <ul id="m_nav_list" class="m_nav">
			  <!-- 	<li class="active"> <a href="#">Admin</a> </li> -->
			  <li><a href="index.php">Home</a></li>
			  	<li><a href="forms/index1.php">Add Country,State,District</a></li>
			  <!-- 	<li><a href="trip.php">Approve Trips(<font color="red"><?php echo $t ?></font>)</a></li>
			  	<li><a href="event.php">Approve Events(<font color="red"><?php echo $e ?></font>)</a></li>
			  		<li><a href="bikes.php">Approve Sellings(<font color="red"><?php echo $s ?></font>)</a></li> -->
			  		
				<?php 
				//echo "<li><br><a href='../bio.html'>Bio</a><br></li>";
				 //echo "<li><br><a href='../blog/web/index.php'>Blog</a><br></li>";

				  //echo "<li><br><a href='../Image upload/upload.php'>Upload image</a><br></li>";
				  //echo "<li><br><a href='../Upload Video/index.php'>Upload Video</a><br></li>";
				  echo "<li><br><a href='../login/logout.php'>Logout</a><br></li>";
				  ?>
				 
			  </ul>
			</div>
		<!-- menu -->
		<div class="container">
			<div class="agile-left">
				<!--p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 T.Globel Place,London</p-->
			</div>
			<div class="w3l-banner-grids">
				<h1><a href="#">AMIGO RIDERS</a></h1>
				<div class="w3layouts-border"> </div>
				<p>THE EXPLORERS</p>
				<div class="w3-button">
					<!--ul>
						<li><a href="about.html" class="button1">About</a></li>
						<li><a href="single.html" class="button2">More</a></li>
					</ul>
				</div-->
				<!-- <div class="agileinfo-social-grids">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-rss"></i></a></li>
						<li><a href="#"><i class="fa fa-vk"></i></a></li>
					</ul>
				</div> -->
			</div>
		</div>
	</div>
</div>
</div>


<br><br>

	<!-- //banner -->
	<!-- welcome -->
	<div class="mylinks">


<div class="row abc" >

<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<a class="l" href="trip.php">
  <img class="card-img-top imgcard img-fluid" src="images/trip.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Approve Trips(<font color="red"><?php echo $t ?></font>)</header></center></p>
    <br><center><a class="l" href="viewtrips.php"><button class="btn btn-info">View all trips</button></a></center>

  </div>
</a>
</div>
</div>



<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<a class="l" href="event.php">
  <img class="card-img-top imgcard img-fluid" src="images/event.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Approve Events(<font color="red"><?php echo $e ?></font>)</header></center></p>
    <br><center><a class="l" href="viewevent.php"><button class="btn btn-success">View all events</button></a></center>

  </div>
</a>
</div>
</div>
<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<a class="l" href="bikes.php">
  <img class="card-img-top imgcard img-fluid" src="images/selling.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Approve Sellings(<font color="red"><?php echo $s ?></font>)</header></center></p>
    <br><center><a class="l" href="viewsellings.php"><button class="btn btn-danger">View all selling</button></a>

</center>

  </div>
</a>
</div>
</div>
</div></div>









<div class="container">
<h2>Feedbacks</h2>

<?php

include"dbconn.php";

$sql="SELECT * FROM feedback";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) >0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$email=$row["email"];
		$fcontent=$row["fcontent"];
		$fdate=$row["fdate"];
		$type=$row["type"];
		?>
		<?php

if(($type=='1')||($type=='2'))

{
	
$sql1="SELECT * FROM u_r_reg  where email='$email'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1) >0)
{
	 
	while($row1=mysqli_fetch_assoc($result1))
	{
		$name=$row1["name"];
		$pic=$row1["photo"];
		//echo $name;
	}
}

}
else
{
$sql1="SELECT * FROM club_reg  where email='$email'";
$result1=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result1) >0)
{
	while($row1=mysqli_fetch_assoc($result1))
	{
		$name=$row1["clubname"];
		$pic=$row1["photo"];
		//echo $name;
	}
}
}



?>


<img class="p" src="../profile/<?php echo $pic ?>" width="100" height="100">
				<?php echo $name ?></h2>
				
					<p><?php echo $fcontent ?></p></font>
					<hr>
<?php
}

}

?> 

</div>







		
		



























                   



	<?php
	include"footer.php";
	?>
	
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