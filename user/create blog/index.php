<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Admission Enquiry Form Flat Responsive Widget Template :: w3layouts</title>
<script typ="text/javascript" src="innerHTMLValidation.js" ></script>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Admission Enquiry Form web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=News+Cycle:400,700" rel="stylesheet">
<style type="text/css">
	
	.myclass{
     	background-color: indigo;
     	color:white;
     	text-align: center;
     	font-size:30px;
     }
     .linkclass{
     	background-color: white;
     	color:red;
     }
     h3{
     	color:yellow;
     	font-size: 20px;
     }
     a:link{
      color:red;
      font-size: 20px;
      font-family: serif;
      font-weight: bold;
     }
     a.cclass{
      text-decoration: none
     }
     a:visited{
      color:red;
     }
     a:hover{
      color:black;
     }
</style>
</head>
<body>
	<?php
session_start();
include "dbconn.php";
$id=$_SESSION["email"];
$sql= "SELECT * FROM u_r_reg where email='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          $name=$row["name"];
          }
      }


	?>
<div class="myclass">
	<?php echo $name ?><br>

	<div class="linkclass">
	                   <?php
	                   

				 echo "<a class='cclass' href='index.php'>Blog</a> &nbsp &nbsp &nbsp";
				  echo "<a class='cclass' href='../index.php'>Home</a> &nbsp &nbsp &nbsp";
				  
				  echo "<a class='cclass' href='../../login/logout.php'>Logout</a> &nbsp &nbsp &nbsp";
				  ?>
					
						<!--a class="cclass" href="C:\xampp\htdocs\amigo\Main Page\mysite.html"><b>Home</b></a>&nbsp &nbsp &nbsp &nbsp &nbsp 
					
						<a class="cclass" href="C:\xampp\htdocs\amigo\Main Page\about.html"><b>About Us</b></a-->

					
						<!--a class="cclass" href="C:\xampp\htdocs\amigo\user\web\index.html"><b>User Join</b></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

					
						<a class="cclass" href="C:\xampp\htdocs\amigo\rider\web\index.html"><b>Rider Join</b></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

					
						<a class="cclass" href="C:\xampp\htdocs\amigo\club\web\index.html"><b>Club Join</b></a-->

					

					
				</div>
</div>
<?php

include "dbconn.php";
$sql="SELECT * FROM blog a,u_r_reg b where a.email='$id' and b.email='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          $bid=$row["blog_id"];
          $head=$row["blog_header"];
          $blog=$row["blog_content"];
          $date=$row["blog_date"];
          $name=$row["name"];
          $type=$row["filetype"];
          $photo=$row["photo"];
?>


		<div class="content-w3ls">
			<h1 class="agile-head text-center">Blog Creation</h1>
			<div class="form-w3layouts">					
				<form action="form4.php" method="post" name="form1" enctype="multipart/form-data">
					<div class="form-control"> 
						<label class="header">Blog header <span>:</span></label>

						<input type="text" id="name" name="header"  required="" value="<?php echo $head ?>">
						<label class="header">Blog:<span></span></label>
						<input type="text" id="name" name="blog"  required="" value="<?php echo $blog ?>">
						<!-- <textarea id="message" name="blog" value="<?php echo $date ?>"></textarea> -->
						<div class="clear"></div>
					</div>

					 <input type="radio" name="filetype" value="image" checked="">Image
											<input type="radio" name="filetype" value="video">Video
							<label class="enquiry">Upload images or videos<span>:</span></label>
							<input  type="file" name="file" id ="file" required="">
				<?php
													if($type=='image')
          {
          	//echo "<h3>Uploaded an image</h3>";
          	$image='../../create blog/'.$row["url"];
          echo "<img src='$image' alt='' width='400' height='300'>";
          }
          else
          {


          		 
						$video='../../create blog/'.$row["url"];
          	echo "<video controls  width='500' height='300'><source src='$video' type='video/mp4' />";
           
          	//echo "<h3>Uploaded a video</h3>";
          	
          
          }
          ?>

					
					<!-- <div class="form-control">
						<label class="enquiry">Write your blog here <span>:</span></label>
						<textarea id="message" name="blog" value="<?php echo $date ?>"></textarea>
						<div class="clear"></div>
						<div class="form-control">
							<input type="radio" name="filetype" value="image" checked="">Image
											<input type="radio" name="filetype" value="video">Video
							<label class="enquiry">Upload images or videos<span>:</span></label>
							<input  type="file" name="file" id ="file" required="">	<br>
						</div>
					</div> -->

					</div>
					
					
					<div class="form-control w3ls-end">
						<input type="reset" class="reset" value="Reset">
						<input type="submit" class="register" value="Submit" onClick="return validateForm()" name="submit">
						<div class="clear"></div>
					</div>	
				</form>
			</div>
		</div>
		<div class="clear"></div>
		<div class="agileits-w3layouts-copyright text-center">
			<!--p class="w3ls-copyright">© 2017 &nbsp;Admission Enquiry Form. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p-->
		</div>	
<?php
}
}
?>


</body>
</html>

