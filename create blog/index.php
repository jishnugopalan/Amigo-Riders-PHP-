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
      color:white;
     }
     a:hover{
      color:white;
     }
     input[type="file"]
     {
     	color: white;
     }
</style>
</head>
<body>
	<?php
session_start();
include "dbconn.php";
$id=$_SESSION["email"];
$type=$_SESSION["user"];


	?>
<div class="myclass">
	

	<div class="linkclass">

					
						<!--a class="cclass" href="C:\xampp\htdocs\amigo\Main Page\mysite.html"><b>Home</b></a>&nbsp &nbsp &nbsp &nbsp &nbsp 
					
						<a class="cclass" href="C:\xampp\htdocs\amigo\Main Page\about.html"><b>About Us</b></a-->

					
						<!--a class="cclass" href="C:\xampp\htdocs\amigo\user\web\index.html"><b>User Join</b></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

					
						<a class="cclass" href="C:\xampp\htdocs\amigo\rider\web\index.html"><b>Rider Join</b></a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

					
						<a class="cclass" href="C:\xampp\htdocs\amigo\club\web\index.html"><b>Club Join</b></a-->

					

					
				</div>
</div>


		<div class="content-w3ls">
			<h1 class="agile-head text-center">Blog Creation</h1>
			<center><?php
	                   if($type==1){
	                   	
                 //echo "<a class='cclass' href='upload.php'></a> &nbsp &nbsp &nbsp";
                  echo "<a class='cclass' href='../user/index.php'>Home</a> &nbsp &nbsp &nbsp";
                  }
                   if($type==2){
                 //echo "<a class='cclass' href='upload.php'></a> &nbsp &nbsp &nbsp";
                  echo "<a class='cclass' href='../rider/index.php'>Home</a> &nbsp &nbsp &nbsp";
                  }
                   if($type==3){
                 //echo "<a class='cclass' href='upload.php'></a> &nbsp &nbsp &nbsp";
                  echo "<a class='cclass' href='../club/index.php'>Home</a> &nbsp &nbsp &nbsp";
                  }
                  
                  //echo "<a class='cclass' href='../logout.php'>Logout</a> &nbsp &nbsp &nbsp";
                  

				
				  ?></center>
			<div class="form-w3layouts">					
				<form action="form4.php" method="post" name="form1" enctype="multipart/form-data">
					<div class="form-control"> 
						<label class="header">Blog header*<span></span></label>

						<input type="text" id="name" name="header"  required="">
						<div class="clear"></div>
					</div>
				
					<!--div class="form-control">	
						<label class="header">Email Address <span>:</span></label>
						<input type="email" id="email" name="email"  required="">
						<div class="clear"></div>
					</div>
				
					<div class="form-control">	
						<label class="header">Phone Number <span>:</span></label>	
						<input type="tel" id="usrtel" name="usrtel" required="">
						<div class="clear"></div>
					</div>	
					<div class="form-control">
							<label class="header">course intrested in?</label>
							<select required>
								<option value="">select one</option>
								<option value="1">course1 </option>
								<option value="2">course2 </option>
								<option value="2">course3</option>
								<option value="2">course4 </option>
							</select>
							<div class="clear"></div>
					</div-->
					<div class="form-control">
						<label class="enquiry">Write your blog here*<span></span></label>
						<textarea id="message" name="blog" placeholder=""></textarea>
						<div class="clear"></div>
						<div class="form-control">
							<input type="radio" name="filetype" value="image" checked=""><font color="white">Image
											<input type="radio" name="filetype" value="video">Video</font>
							<label class="enquiry">Upload images or videos<span>*</span></label>
							<input  type="file" name="file" id ="file" required="">	<br>
						</div>
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
			<p class="w3ls-copyright">©&nbsp;All rights reserved | Design by <a href="">amigoriders@gmail.com</a></p>
		</div>	



</body>
</html>

