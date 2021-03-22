<!DOCTYPE html>
<html lang="en">
<head>
<title>Njoy Trip a Travel Category Flat Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Njoy Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script typ="text/javascript" src="validateForm.js" ></script>
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
  <script type="text/javascript">
  	function getEmail(emailid){

			email  = new XMLHttpRequest();
			email.open('GET' , 'test2.php?email='+emailid, true);
			email.send();
			email.onreadystatechange = function(){
				if (email.readyState == 4 && email.status == 200)
				{
					
					document.getElementById('emailDiv').innerHTML = email.responseText;
					}
				
				}
	
	
	}
  </script>
<!-- menu -->
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<script type="text/javascript">
	function ajaxFunction(p) {
	$.ajax({
	type: "POST",
	url: "checkpass.php",
	data:'pass='+p,
	success: function(data){
		$("#like").html(data);
		document.getElementById('like').innerHTML = x.responseText;
		//getCity();
	}
	});
}


</script>
<style type="text/css">
	.my{
		background-image: url("images/1.jpg");
		background-repeat: no-repeat;
	}
	img.p{

 border-radius: 100%; 
 font-size: large;
 border-color: white;
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
	/*background-image: url("images/3.jpg");
	background-repeat: no-repeat;
	background-size: cover;*/
	padding-top: 50px;
}
.text{
	padding-left: 40px;
	/*border-style: solid;
	border-radius: 10px;*/
	/*border-color: white;*/
}
body{
	color:white;
}
.color{
	color:black;
	/*padding-left: 30px;
	padding-right: 30px;*/
}
input[type="text"]{
	color:black;
}
input[type="file"]{
	color:white;
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
    	$email=$row["email"];
          $name=$row["name"];
          $place=$row["district"];
          $state=$row["state"];
          $c=$row["country"];
          $_SESSION["pid"]=$place;
          $_SESSION["sid"]=$c;
          $dob=$row["dob"];
          $gender=$row["gender"];
          $house=$row["house"];
          $street=$row["street"];
          $pin=$row["pincode"];
          $ph=$row["phone"];
    }
} 
else {
    echo "0 results";
}


	?>


	<!-- banner -->
	<!--div class="my">
	<div class="banner">
		< menu -->
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
			<div class="banner">
				<h1><font color="white">AMIGO RIDERS</font></h1>
				
				<p>THE EXPLORERS</p>
		<div class="cover">
					
				<?php 
include "dbconn.php";

$query = $conn->query("SELECT photo FROM u_r_reg where email='$id'");       

if($query->num_rows > 0){

    while($row = $query->fetch_assoc()){
    
        $imageURL = '../profile/'.$row["photo"];
       
        
    }
    
        }
        
        
    
?>

	
				
			

<center>
	
<font color="white"><img class="p"  src="<?php echo  $imageURL; ?>" alt="" width="200" height="200"/>
	</a><b><h3><?php echo $name ?></h3></b></font>


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
 <!-- <font color="white">Lives in <?php echo $district;?>,<?php echo $state;?></font><br> -->
 
 <?php
 }
    }
}
}
?>
     </center>       <div class="color">        
					<div class=text><center>
						<form action="uppass.php" method="post" enctype="multipart/form-data" name="form1">


	<font color="white">Current password:</font><br><input type="text"  name="pass" pattern="{8,}" autocomplete="off" onchange="ajaxFunction(this.value)" required=""><br>
	<a href="#"><font color="white">click here</font></a> <br>
<a href="Forgot password/index.html"><font color="yellow">Forgot password</font></a>


	<div id="like">
		
	</div>
	
	
</form></center>





					

				
</div>
</div>
</center></div>
<font color="black">
		<?php
		include"footer.php";
		?>
		</font>		
		</body></html>	
						
			
			
