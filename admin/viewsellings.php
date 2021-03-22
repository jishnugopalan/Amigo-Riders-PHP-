<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
.links{
	background-image: url("images/3.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}
.mylinks{
	background-color: gray;
	color:white;
	padding-left: 30px;
	padding-bottom: 30px;
	padding-right: 30px;

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
.name{
	background-color: royalblue;
	color:white;
	text-align: left;
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

			 <div id="m_nav_container" class="m_nav">
			 <?php 
			  include"header.php";
			  ?>
			</div>
		<!-- menu -->
		<div class="container">
			<div class="agile-left">
				
			</div>
			<!-- wthree-top-grid -->
			<div class="wthree-top-grid">
				<h1><a href="">AMIGO RIDERS</a></h1>
				<div class="w3-agileits-border"> </div>
				<h2></h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>
	<!-- //banner -->
	<!-- blog -->
	<h1>All Registered Bikes For Selling</h1>
	<div class="grid-bottom widget-shadow">

					<table id="det" class="table table-bordered table-striped no-margin grd_tble">
						<thead>
							<tr>
								
								<th>Seller Name</th>
								<th>
								Bike Name
								</th>
								<th>
								Bike photo
								</th>
								<th>
								Bike number
								</th>
								
								<th>
								Price
								</th>
								<th>
								Status
								</th>
                                <th>
								Email
								</th>


								
								<th>
									Phone number
									
								</th>
								

							</tr>
						</thead>
						<tbody>
	<?php
include "dbconn.php";
$sql="SELECT * FROM selling a,u_r_reg b  where a.email=b.email  order by a.selling_id DESC";
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
             $status=$row["status"];
               $description=$row["features"];
               $price=$row["price"];
               $bnumber=$row["bikenumber"];
          $name=$row["name"];
          $email=$row["email"];
          $ph=$row["phone"];
          
          

         
?>


							<tr>
								<td><?php echo $name ?></td>
								<td><?php echo $bname ?></td>
								<td><img class="card-img-top imgcard img-fluid" src="<?php echo $bphoto ?>" alt="Card image cap"></td>
								
									<td><?php echo $bnumber ?></td>
									<td><?php echo $price ?></td>
									<td><?php echo $status ?></td>
									<td><?php echo $email ?></td>
									<td><?php echo $ph ?></td>




</tr>
																										<?php
}
}

?>

				</tbody></table></div>
												<script type="text/javascript" charset="utf8" src="jquery-1.8.2.min.js"></script> <!-- API for datatable -->
  <script type="text/javascript" charset="utf8" src="jquery.dataTables.min.js"></script><!-- API for datatable -->
  <link rel="stylesheet" type="text/css" href="jquery.dataTables.css"><!-- API for datatable -->
					<script type="text/javascript">
					$(function(){
				    $("#det").dataTable();		//the table is converted into datatable
					  })
					
</script>


	<!-- // blog -->
	<!-- footer -->
	<?php
	include"footer.php";
	?>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
</body>	
</html>