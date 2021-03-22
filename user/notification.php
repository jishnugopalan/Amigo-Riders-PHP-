<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

$id=$_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Njoy Trip a Travel Category Flat Bootstrap responsive Website Template | Blog :: w3layouts</title>
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
	img.p{

 border-radius: 100%; 
 font-size: large;
}
.space{
	padding-left: 300px;
}
.header{
	/*background-color: grey;*/
	color:white;
	
}
.not{
	border-style: solid;
	border-radius: 10px;
	border-color: black;
	background-color: gray;
	font-size: large;
}
 a.l{
      text-decoration: none
      
     }
     a:link{
	color: white;
	
}
a:visited{
	color:white;
}
a:hover{
	color:yellow;
}
</style>
<script type="text/javascript">
	function notification() {
  var xhttp;
  // if (tid == "") {
  //   document.getElementById("txtHint").innerHTML = "";
  //   return;
  // }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    //document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getNot.php");
  xhttp.send();
}
</script>

</head>
<body onload="notification()">
	<!-- banner -->
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
		<div class="container">
			<div class="agile-left">
				
			</div>
			<!-- wthree-top-grid -->
			<div class="wthree-top-grid">
				<h1><a href="">AMIGO RIDERS</a></h1>
				<div class="w3-agileits-border"> </div>
				<h2>Notifications</h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>
	<!-- //banner -->
	<!-- blog -->
	<div class="blog">
			<div class="container">
				
				<!-- news -->
				<div class="w3layouts-news">
						<div class="agile-its-news-grid">
<div class="header">
<?php
include"dbconn.php";
$sql="SELECT * FROM notification where email='$id' order by ndate DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_assoc($result)) {
	 	$header=$row["header"];
	 	$body=$row["body"];
	 	$ndate=strtotime($row["ndate"]);
	 	$item_id=$row["item_id"];
	 	$ntype=$row["ntype"];
	 	$nname=$row["nname"]
	 	
?>
<div class="not">
<?php

if($ntype=='trip')
{
	echo"<br>";
	echo $header;
echo "<br>";
echo "Your trip with destination ";
echo $nname;
echo " that you are joined was ";
echo $body;
echo"<br>";
echo "<font size='2px'>",date("d-m-Y H:m",$ndate),"</font>";
echo"<br>";
	echo"<a class='l' href='mytrip.php'>See my trip</a>";
	echo"<br>";
}

	else if($ntype=='bcomment')
	{
	echo"<br>";
	echo $header;
echo "<br>";
////echo "Your trip with destination ";
//echo $nname;
//echo " that you are joined was ";
echo $body ," ",$nname;
echo"<br>";
echo "<font size='2px'>",date("d-m-Y H:m",$ndate),"</font>";
echo"<br>";
	echo"<a class='l' href='blog/blogs/blogupdate.php'>See my blogs</a>";
	echo"<br>";
}
else if($ntype=='blike')
	{
	echo"<br>";
	echo $header;
echo "<br>";
////echo "Your trip with destination ";
//echo $nname;
//echo " that you are joined was ";
echo $body ," ",$nname;
echo"<br>";
echo "<font size='2px'>",date("d-m-Y H:m",$ndate),"</font>";
echo"<br>";
	echo"<a class='l' href='blog/blogs/blogupdate.php'>See my blogs</a>";
	echo"<br>";
}
?>
</div>
<br><br>
<?php
}
?>
</div>
<?php
}
?>

</div>	<!-- // blog -->
	<!-- footer -->
	<?php
	include"footer.php";
	?>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
</body>	
</html>