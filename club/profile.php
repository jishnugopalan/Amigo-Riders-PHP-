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
	background-image: url("images/gallery.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}
.text{
	padding-left: 40px;
	border-style: solid;
	border-radius: 10px;
	border-color: white;
}
body{
	color:white;
}
.color{
	color:black;
	padding-left: 30px;
	padding-right: 30px;
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
<div class="cover">


	<?php
	session_start();
	include "dbconn.php";
$id=$_SESSION["email"];

$sql= "SELECT * FROM club_reg where email='$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$email=$row["email"];
          $name=$row["clubname"];
          $place=$row["district"];
          $club_reg_id=$row["club_reg_id"];
          $ownership=$row["ownership"];
          $state=$row["state"];
          $c=$row["country"];
          $_SESSION["pid"]=$place;
          $_SESSION["sid"]=$c;
          $issued_date=$row["issued_date"];
          //$gender=$row["gender"];
          $place=$row["current_place"];
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
			include "header.php";
			?>
		<!-- menu -->
		<!--div class="container">
			<div class="agile-left">
				<!--p><i class="fa fa-map-marker" aria-hidden="true"></i> 123 T.Globel Place,London</p-->
			<!--/div>
			<div class="w3l-banner-grids">
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

$query = $conn->query("SELECT photo FROM club_reg where email='$id'");       

if($query->num_rows > 0){

    while($row = $query->fetch_assoc()){
    
        $imageURL = '../profile/'.$row["photo"];
       
        
    }
    
        }
        
        else{
        	echo "";
        } 
    
?>

	
				<h1><font color="white">AMIGO RIDERS</font></h1>
				
				<p>THE EXPLORERS</p>
			
<br><br><br><br><br><br>
<center>
	<a href="<?php echo $imageURL; ?>">
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
 <font color="white">Lives in <?php echo $district;?>,<?php echo $state;?></font><br>
 
 <?php
 }
    }
}
}
?>
     </center>   
     <center>    <div class="color">        
					<div class=text>
						<form action="update.php" method="post" enctype="multipart/form-data">
							<br><font color="white">Update Profile Picture</font>
							<input type="file" name="file">
							<input type="submit" value="upload" name="submit">
<br>
							<font color="white">Name:</font><br><input type="text" value="<?php echo $name ;?>" name="name" pattern=".[A-Za-z .]{3,50}" autocomplete="off">
					<button name="submit8" type="submit" value="<?php echo $name;?>">Update</button> <br>


					<font color="white">Club issued date</font><br><input type="date" value="<?php echo $issued_date ;?>" name="idate">
					<button name="submit1" type="submit" value="<?php echo $dob ;?>">Update</button> <br>


<font color="white">Club Ownership</font><br><input type="text" value="<?php echo $ownership ;?>" name="owner">
					<button name="submit9" type="submit" value="<?php echo $dob ;?>">Update</button> <br>
					<font color="white">Club registration ID</font><br><input type="text" value="<?php echo $club_reg_id ;?>" name="cid" pattern=".[0-9]{4,5}">
					<button name="submit10" type="submit" value="<?php echo $dob ;?>">Update</button> <br>

                     <!-- <font color="white"></font>
					<font color="white">Gender:<?php echo $gender ?></font><br>
					<select name="gender" selected>
						
						<option value="male" selected>Male</option>
						<option value="female">Female</option>
						<option value="other">Other</option>
					</select>
					<button name="submit2" type="submit" value="<?php echo $gender ;?>">Update</button> <br> -->
					
					<font color="white">Current Place:</font><br><input type="text" value="<?php echo $place ;?>" name="cplace" pattern=".[A-Za-z .]{3,50}" autocomplete="off">
					<button name="submit3" type="submit" value="<?php echo $house ;?>">Update</button> <br>
					<font color="white">Street name:</font><br><input type="text" value="<?php echo $street ;?>" name="street" pattern=".[A-Za-z .]{3,50}" autocomplete="off">
					<button name="submit4" type="submit" value="<?php echo $street ;?>">Update</button> <br>
					<font color="white">Pin code:</font><br><input type="text" value="<?php echo $pin ;?>" name="pin" pattern=".[0-9]{5,5}" autocomplete="off">
					<button name="submit5" type="submit" value="<?php echo $pin ;?>">Update</button> <br>
					
					<font color="white">Contact info:</font><br><input type="text" value="<?php echo $ph ;?>" name="ph" pattern=".[0-9]{9,9}" autocomplete="off">
					<button name="submit7" type="submit" value="<?php echo $ph ;?>">Update</button> <br>
					<!-- <font color="white">Update password:</font><br>
					<input type="password" placeholder="Enter new password" name="pass" autocomplete="off">
					<button name="submit9" type="submit" value="">Update</button> <br><br> -->
		<br><br><br>			
</center>
	<br><br><br>			</form>
</div>

</div>
		<?php
		include"footer.php";
		?>			
						<!--h2><?php echo $place ?>,<?php echo $state ?></h2-->
					<!--h5>Integer mollis porttitor nibh, id pellentesque mauris porta et.</h5>
					<p>Donec bibendum ligula sit amet auctor vulputate. Maecenas elementum, magna nec interdum venenatis, nibh enim gravida sem, id consectetur justo erat non tortor. Nam ultricies eget erat quis dapibus. Aenean eu scelerisque lacus, et fringilla odio.<span>Sed vestibulum sapien ornare ex sodales, eu feugiat ipsum tempor. Vivamus ante orci, congue sit amet aliquam non, sagittis eget justo. Curabitur mollis hendrerit nunc, id luctus sem vestibulum id.</span></p--></font>
			
				<!--div class="col-md-4 w3l-welcome-img"-->				
				

				<!--form method="post" enctype="multipart/form-data">
   <h2> Update Profile Picture
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
            $insert = $db->query("UPDATE  u_r_reg SET photo='$fileName' WHERE email='$id'");
            if($insert){
              //header('index.php');
                 
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

	//header("Refresh:0; url=index.php");							
								
	}	

		

?-->
				


			
				<!--?php

				//session_start();
	include "dbconn.php";
//$id=$_SESSION["id"];
	$name1="";
	$name2="";
$sql1= "SELECT * FROM blog where email='$id'";
$result = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          $id=$row["email"];
          $head=$row["blog_header"];
          $blog=$row["blog_content"];
          $date=$row["blog_date"];
          $type=$row["filetype"];



/*$sql2="SELECT * FROM login where urid='$id'";
$result = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
	$type=$row["user_type"];


if($type==1)

{
	$sql3="SELECT * FROM u_r_reg where urid='$id'";
$result = mysqli_query($conn, $sql3);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
	$name=$row["name"];


//else{
	//$name="";
}
}
else if( $type==2)
{
$sql4="SELECT * FROM u_r_reg where urid='$id'";
$result = mysqli_query($conn, $sql4);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
	$name=$row["name"];
}
}
}
else
{
$sql5="SELECT * FROM club_reg where urid='$id'";
$result = mysqli_query($conn, $sql5);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
	$name=$row["clubname"];
}
}
}*/











          ?>


          <!--div class="col-md-4 w3l-welcome-right"-->

          <!--div class="testimonial jarallax"-->
		<!--div class="container"-->
			<!--div class="agileits-w3layouts-info"-->
				<!--div class="testimonial-grid"-->
					<!--div class="slider"-->
							<!--div class="callbacks_container"-->
							<!--div class="blog">
								<ul>
									<li>
										<!--div class="testimonial-top"-->
					
					<!--h2><b><font color="red"><?php echo $head ?></b></h2></font>
					<h5><b><?php echo $date ?></b></h5>
					<p><font color="blue"><i><?php echo $blog ?></i></font></p>

					<!--?php
					if($type=='image')
          {
          	//echo "<h3>Uploaded an image</h3>";
          	$image='../create blog/'.$row["url"];
          echo "<img src='$image' alt='' width='400' height='300'>";
          }
          else
          {


          		echo "<input type='button' value='edit'>"; 
						echo "  ";
						echo "<input type='button' value='delete'><br>"; 
						$video='../create blog/'.$row["url"];
          	echo "<video controls  width='500' height='300'><source src='$video' type='video/mp4' />";

          	//echo "<h3>Uploaded a video</h3>";
          	
          
          }
          ?>
          <!--?php
					if(isset($result))
					{
						echo "<br><input type='button' value='edit'>"; 
						echo "  ";
						echo "<input type='button' value='delete'>";
					}
					else
					{
						echo "";
					}
					?>
					</div>
				</li>
			</ul>
					
					<!--div class="w3l-button">
						<a href="single.html">More</a>
					</div-->
				
				<!--?php
			//}
		//}
		//}
	}
    }
 
else {
    echo "";
}

				?-->
			</div>


				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
