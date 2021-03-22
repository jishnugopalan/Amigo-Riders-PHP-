<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "dbconn.php";
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
.button {
  /* text styles */
  font-size: 11px;
  line-height: 18px;
  color: #fff;
  text-decoration: none;
  text-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
  
  /* box styles */
  display: inline-block;
  height: 19px;
  padding: 0 10px;
  border: 1px solid;
  border-color: #2d86b6 #24659e #255796;
  border-radius: 21px;
  box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2) inset, 0 1px 1px rgba(1, 4, 8, 0.2);
  
  /* gradients */
  background-color: #52b6ec;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF52B6EC', endColorstr='#FF2E75CE');
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #52b6ec), color-stop(100%, #2e75ce));
  background-image: -webkit-linear-gradient(top, #52b6ec 0%, #2e75ce 100%);
  background-image: -moz-linear-gradient(top, #52b6ec 0%, #2e75ce 100%);
  background-image: -o-linear-gradient(top, #52b6ec 0%, #2e75ce 100%);
  background-image: linear-gradient(top, #52b6ec 0%, #2e75ce 100%);
    
}
.button:hover {
  text-decoration: none;
  border-color: #377cae #175a9c #0c4893;
  box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2) inset, 0 1px 1px rgba(5, 64, 140, 0.2);
  
  background-color: #4fa6e4;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF4FA6E4', endColorstr='#FF1462C4');
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #4fa6e4), color-stop(100%, #1462c4));
  background-image: -webkit-linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
  background-image: -moz-linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
  background-image: -o-linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
  background-image: linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
}
.button:active {
  border-color: #094b84 #094b84 #0f4585;
  box-shadow: 0 1px 1px rgba(241, 243, 247, 0.2), 0 0 20px rgba(0, 0, 0, 0.5) inset;
  
  background-color: #1c7ec9;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF1C7EC9', endColorstr='#FF2395D9');
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #1c7ec9), color-stop(100%, #2395d9));
  background-image: -webkit-linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
  background-image: -moz-linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
  background-image: -o-linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
  background-image: linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
}

th, td {
  padding: 15px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
.mylinks{
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


</style>


</head>
<body>
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
			//session_start();
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
				<h2>My Sellings</h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>
	<!-- //banner -->
	<!-- blog -->
	<?php
	$sid=$_GET["sid"];
$sql="SELECT * FROM selling a,u_r_reg b  where a.selling_id='$sid' and a.email=b.email order by a.selling_id DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	 $photo='../profile/'.$row["photo"];
         $bid=$row["selling_id"];
          $bname=$row["bike_name"];
           $bphoto='../rider/Bike Selling Form/'.$row["bphoto"];
            $lphoto='../rider/Bike Selling Form/'.$row["license_photo"];
             $rphoto='../rider/Bike Selling Form/'.$row["rcbook_photo"];
              //$no=$row["no_of_person"];
               $description=$row["features"];
               $price=$row["price"];
               $bnumber=$row["bikenumber"];
          $name=$row["name"];
          $email=$row["email"];
          $ph=$row["phone"];
          
          

         
?>
		
	<form action="Bike Selling Form/updateselling.php" method="post" enctype="multipart/form-data">

	<!-- <div class="blog">
			<div class="container">
				
				<!-- news -->
				<!-- <div class="w3layouts-news">
						<div class="agile-its-news-grid">
							<div class="col-md-8 w3ls-blog-left">
								<div class="w3-blog-left-grid"> -->
									<!--div class="w3ls-blog-leftl">








										<!--h4><?php echo $date ?> <span></span></h4-->
										<!--a href="#"><i class="fa fa-tags" aria-hidden="true"></i> </a-->
									</div>
									<!-- <div class="w3ls-blog-leftr">
										
										<h3><img class="p"  src="<?php echo  $photo; ?>" alt="" width="150" height="150"/>
										<?php echo $name ?></h3> -->
										   
										   


  <center><font color="blue" size="5px">Update the proof of <?php echo strtoupper($bname) ?></font></center>
										   	<div class="mylinks">


<div class="row abc" >

<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		
  <img class="card-img-top imgcard img-fluid" src="<?php echo $bphoto ?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Update Bike photo<input type="file" name="bike" >
                                             <input type="submit" class="btn btn-success" name="bphoto" value="upload"></header></center></p>

  </div>

</div>

</div>


<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		
  <img class="card-img-top imgcard img-fluid" src="<?php echo $lphoto ?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Update License<input type="file" name="liscensecopy" >
    <input type="submit" class="btn btn-success" name="lphoto" value="upload"></header></center></p>

  </div>

</div>

</div>



<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		
  <img class="card-img-top imgcard img-fluid" src="<?php echo $rphoto ?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>Update R.C Book<input type="file" name="rcbookcopy" >
    <input type="submit" class="btn btn-success" name="rphoto" value="upload"></header></center></p>

  </div>

</div>

</div>
</div>

</div>

     <!-- <h2><center><?php echo strtoupper($bname) ?></center></h2>
	<?php echo "<img src='$bphoto' alt='' width='300' height='300'>"; ?>
	<?php   echo "<img src='$lphoto' alt='' width='300' height='300'>";?>
		<?php echo "<img src='$rphoto' alt='' width='300' height='300'>"; ?>
		 <br><font color="red">Update Bike photo<input type="file" name="bike">
                                             <input type="submit" name="bphoto" value="upload"><br>
	
	
		Update License photo<input type="file" name="liscensecopy" >
    <input type="submit" name="lphoto" value="upload"><br>
	</td>

		Update RC Book photo<input type="file" name="rcbookcopy" >
    <input type="submit" name="rphoto" value="upload"></font> -->
    <font color="blue" size="5px">Update the details of <?php echo strtoupper($bname) ?></font>
				<input type="hidden" value="<?php echo  $bid; ?>" name="sid">
	<div class="form-group">
		
<label for="usr">Bike name:</label><br><input type="text" value="<?php echo $bname ?>" name="bikename" class="form-control" id="usr" required="" pattern="[A-Za-z0-9 ]{3,}"></div>
<div class="form-group">
	<div class="col-xs-4">
	<label for="usr">Price:</label><input type="number" value="<?php echo $price ?>" name="amount" class="form-control" id="usr" required="" min="10000"></div></div>
	<div class="form-group">
	<div class="col-xs-4">				 	
  <label for="usr">Number:</label><input type="text" value="<?php echo $bnumber ?>" name="bikenumber" class="form-control" id="usr" required="" pattern="[A-Za-z0-9 ]{3,}"></div></div>
  <div class="clearfix"></div>
  <div class="form-group">

   <label for="usr">Description:</label>
   <textarea name="features" class="form-control" rows="5" id="comment" required=""><?php echo $description ?></textarea>
   <!-- <input type="text" value="<?php echo $description ?>" name="features" class="form-control" id="usr" required=""></div> --><br>
    <input type="submit" class="btn btn-success" name="update" value="Update">
    <input type="submit" class="btn btn-danger" name="delete" value="Delete">
</tr>








										
							<div class="clearfix"> </div>
						</div>
				</div>
				<!-- //news -->
			</div>
	</div>
																										<?php
}
}
else{
	echo "<center><h1>No Sellings Found</h1></center>";
}
?>
</table></form>

	<!-- // blog -->
	<!-- footer -->
	<?php
	include"footer.php";
	?>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
</body>	
</html>