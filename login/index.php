<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Music Login Form Responsive Widget Template :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Music Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Reem+Kufi&amp;subset=arabic" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
	<style type="text/css">
		img.p{

 border-radius: 100%; 
 font-size: large;
 
}
	</style>
</head>

<body>
	<!-- <audio src="../media/BulletStartingSoundThreebulletstartedatsametime256kRingtone.mp3" id="my_audio"></audio>
<script type="text/javascript">
    window.onload=function(){
      document.getElementById("my_audio").play();
    }
</script> -->
	<!-- title -->
	<h1>
		<span>A</span>migo
		<span>R</span>iders
		</h1>
	<!-- //title -->
	<!-- content -->
	<div class="sub-main-w3">
		<form action="login.php" method="post">
			<div class="form-style-agile">
				<label>
					Email
					<i class="fas fa-user"></i>
				</label>
				<input placeholder="Email" name="Name" type="text" required="" autocomplete="off">
			</div>
			<div class="form-style-agile">
				<label>
					Password
					<i class="fas fa-unlock-alt"></i>
				</label>
			
				<input placeholder="Password" name="Password" type="password" required="" id="myInput">
				
			</div>
			<!-- checkbox -->
			<div class="wthree-text">
				<ul>
					<li>
						<label class="anim">

							<input type="checkbox" class="checkbox" onclick="myFunction()" align="right" >
							<span>Show Password</span>
						</label>
					</li>
					<li>
						<?php
						echo "<a href='Forgot password/index.html'>Forgot Password?</a>";
						?>
					</li>
				</ul>
			</div>
			<!-- //checkbox -->
			<input type="submit" value="Log In">
			
			<!-- social icons -->
			<div class="footer-social">
				<br>
				<h2>Or Sign up with</h2>
				<!-- <a href="../guest/index.html"><input type="button" value="Sign Up"></a>
 -->
				<ul>
                    <li>
					<a href="../registration/club/index.php"><img class="p" src="images/1-sodelhi.jpg" width="100" height="100"><br><font color="white">Club</font></a></li>
        <li><a href="../registration/rider/index.php"><img class="p" src="images/7-benefits-dating-a-motorcycle-rider-6.jpg" width="100" height="100"><br><font color="white">Rider</font></a></li>
        <li><a href="../registration/user/index.php"><img class="p" src="images/anh-tr-n-392097-unsplash-e1537266134328.jpg" width="100" height="100"><br><font color="white">User</font></a></li><br>
       <h2> <a href="../guest/index.html"><font color="white">Home</font></a></h2>
					<!-- <li>
						<a href="../guest/index.html">
							<i class="fab fa-facebook-f icon_facebook"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter icon_twitter"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-dribbble icon_dribbble"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-google-plus-g icon_g_plus"></i>
						</a>
					</li> -->
				</ul> 
			</div>
			<!-- //social icons -->
		</form>
	</div>
	<!-- //content -->

	
</body>

</html>