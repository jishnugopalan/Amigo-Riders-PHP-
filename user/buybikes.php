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

.header{
	background-color: grey;
	color:white;
	text-align: center;
}
.header1{
	background-color: grey;
	color:white;
	
}
.name{
	background-color: royalblue;
	color:white;
	text-align: left;
	padding: 10px;
}

.mylinks{
  
  background-color:#ddd;
  color:black;
  padding-left: 20px;
  padding-top: 20px;
  padding-right: 20px;
  padding-bottom: 20px;
}
.imgcard{
width: 300px;
height: 200px;
}
.abc{
	padding-left: 30px;
  padding-top: 30px;
  background-color: gray;
  color: white;
 /* padding-top: 40px;
  padding-left: 40px;
  padding-right: 40px;
  padding-bottom: 40px;*/
}

</style>
<script type="text/javascript">
	     function getComment(bid) {
    //noConflict();
    //console.log()
        var f=document.getElementById('sid_'+bid).value;
         var g=document.getElementById('c').value;
         
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "comment.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            sid:f,
            com:g
        },
      success: function(data){
        $("#comment").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});

      

       }
        function loadComment(bid) {
    //noConflict();
    //console.log()
        var f=document.getElementById('sid_'+bid).value;
         //var g=document.getElementById('c').value;
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "viewcomment.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            sid:f
            //com:g
        },
      success: function(data){
        $("#comment").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});

      

       }
</script>


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
				<h2>Buy Bikes</h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>
	<!-- //banner -->
	<!-- blog -->
	<?php
include "dbconn.php";
$i=$_GET["bid"];
$sql="SELECT * FROM selling a,u_r_reg b  where a.email=b.email and a.selling_id='$i' and admin_s='y' order by a.selling_id DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	 $photo='../profile/'.$row["photo"];
         $bid=$row["selling_id"];
          $bname=mb_strtoupper($row["bike_name"]);
           $bphoto='../rider/Bike Selling Form/'.$row["bphoto"];
            $lphoto='../rider/Bike Selling Form/'.$row["license_photo"];
             $rphoto='../rider/Bike Selling Form/'.$row["rcbook_photo"];
              //$no=$row["no_of_person"];
               $description=$row["features"];
               $price=$row["price"];
               $bnumber=strtoupper($row["bikenumber"]);
          $name=$row["name"];
          $email=$row["email"];
          $ph=$row["phone"];
          
          

         
?>
	<div class="blog">
			<div class="container">
				
				<!-- news -->
				<div class="w3layouts-news">
						<div class="agile-its-news-grid">
							<!-- <div class="col-md-8 w3ls-blog-left">
								<div class="w3-blog-left-grid"> -->
									<!--div class="w3ls-blog-leftl">








										<!--h4><?php echo $date ?> <span></span></h4-->
										<!--a href="#"><i class="fa fa-tags" aria-hidden="true"></i> </a-->
									</div>
									<div class="header">
									<!-- <div class="w3ls-blog-leftr"> -->
										<div class="name">
										<img class="p"  src="<?php echo  $photo; ?>" alt="" width="100" height="100"/>
										<font color="white"><?php echo $name ?></font>
										
									</div>
                </div>
										<br>
											

                           <div class="mylinks">


<div class="row abc" >

<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		
  <img class="card-img-top imgcard img-fluid" src="<?php echo $bphoto ?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header><?php echo $bname ?></header></center></p>

  </div>

</div>

</div>

<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		
  <img class="card-img-top imgcard img-fluid" src="<?php echo $lphoto ?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>License photo</header></center></p>

  </div>

</div>

</div>

<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		
  <img class="card-img-top imgcard img-fluid" src="<?php echo $rphoto ?>" alt="Card image cap">
  <div class="card-body">
    <p class="card-text"><center><header>RC book photo</header></center></p>

  </div>

</div>

</div>




</div>




											
										<input type="hidden" value="<?php echo $bid ?>" id="sid_<?php echo $bid ?>">
                                         <?php echo  $price ?>Rs<br>
										Bike number:<?php echo $bnumber ?>

										<h3><u>Description</u></h3><br><?php echo $description ?><br>
										Email:<?php echo $email ?><br>
										Phone:<?php echo $ph ?><br><br>
										<!-- <?php echo $bid ?> -->
										<!--a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a-->
										
		
										<a href="chat/my.php?eid=<?php echo $email ?>"> <button class="btn btn-success"> Chat Now</button></a></h2>
										<br><br>
											
												
											
											
											
												
											
											
										</ul>


											<div id="comment">
												
											
											
											</div>
											
										
									</div>

									<div class="clearfix"> </div>
								</div>



								
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

	<!-- // blog -->
	<!-- footer -->
	<?php
	include"footer.php";
	?>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
</body>	
</html>