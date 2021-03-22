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
<body onload="loadComment()">
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

$sql="SELECT * FROM selling a,u_r_reg b where a.email=b.email  and admin_s='y' order by a.selling_id DESC";
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
          // $com=$row["content"];

         
          
          

         
?>
	<div class="blog">
			<div class="container">
				
				<!-- news -->
				<div class="w3layouts-news">
						<div class="agile-its-news-grid">
							<div class="col-md-8 w3ls-blog-left">
								<div class="w3-blog-left-grid">
									<!--div class="w3ls-blog-leftl">








										<!--h4><?php echo $date ?> <span></span></h4-->
										<!--a href="#"><i class="fa fa-tags" aria-hidden="true"></i> </a-->
									</div>
									<div class="w3ls-blog-leftr">
										
										<h2><img class="p"  src="<?php echo  $photo; ?>" alt="" width="150" height="150"/>
										<?php echo $name ?></h2>
										
										<?php echo "<img src='$bphoto' alt='' width='400' height='300'>"; ?>
											<h3>Bike name:<?php echo $bname ?></h3>
										<h3>Price:<?php echo $price ?></h3>
										
		<?php   echo "<h3>License:</h3><img src='$lphoto' alt='' width='400' height='300'>";?>
		<?php echo "<h3>RCbook:</h3><img src='$rphoto' alt='' width='400' height='300'>"; ?>
										
										<input type="hidden" value="<?php echo $bid ?>" id="sid_<?php echo $bid ?>">

										<h3>Bike number:<?php echo $bnumber ?></h3>
										<h3>Description<p><?php echo $description ?></p></h3>
										<?php echo $email ?><br>
										<?php echo $ph ?>
										<!-- <?php echo $bid ?> -->
										<!--a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a-->
										<?php
										 $sql4="SELECT * FROM comment where sell_id='$bid'";
          $result1=mysqli_query($conn,$sql4);
          if(mysqli_num_rows($result1) > 0)
          {
            while($row1=mysqli_fetch_assoc($result1))
            {
              $com=$row1["content"];	
              ?>
										<?php echo $com ?>
										<?php
										       }
}
?>
		
										<ul>
											
											<a href="chat/my.php?eid=<?php echo $email ?>"><input type="button" value="Chat Now"></a>
											
												
											
											
										</ul>
<!-- 										<?php
										include"dbconn.php";
										$sql2="SELECT * FROM comment where sell_id='$bid'";
	$result=mysqli_query($conn,$sql2);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$com=$row["content"];
			
			echo "<br>";
		}
    }
    ?> -->
										<input type="text" name="comment" placeholder="write a comment" id="c" required="">
											<div id="comment">
												
											
											
											</div>
											<button type="submit" onclick="getComment('<?php echo $bid ?>')">comment</button>
										
										<!--div class="more">
											<a href="single.html">Read More</a>
										</div-->
									</div>

									<div class="clearfix"> </div>
								</div>



								<!--div class="w3-blog-left-grid">
									<div class="w3ls-blog-leftl">
										<h4>SEPT <span>24</span></h4>
										<a href="#"><i class="fa fa-tags" aria-hidden="true"></i> 10</a>
									</div>
									<div class="w3ls-blog-leftr">
										<a href="single.html"><img src="images/11.jpg" alt=" " class="img-responsive" /></a>
										<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
										nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
										reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
										pariatur</p>
										<ul>
											<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> User Name</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i> 0 Tags</a></li>
											<li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 Comments</a></li>
										</ul>
										<div class="more">
											<a href="single.html">Read More</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="w3-blog-left-grid">
									<div class="w3ls-blog-leftl">
										<h4>OCT <span>25</span></h4>
										<a href="#"><i class="fa fa-tags" aria-hidden="true"></i> 10</a>
									</div>
									<div class="w3ls-blog-leftr">
										<a href="single.html"><img src="images/12.jpg" alt=" " class="img-responsive" /></a>
										<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
										Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
										nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
										reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
										pariatur</p>
										<ul>
											<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> User Name</a></li>
											<li><a href="#"><i class="fa fa-tags" aria-hidden="true"></i> 0 Tags</a></li>
											<li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i> 10 Comments</a></li>
										</ul>
										<div class="more">
											<a href="single.html">Read More</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
								
						<nav>
							<ul class="pagination page-blog">
								<li>
									<a href="#" aria-label="Previous">
										<span aria-hidden="true">«</span>
									</a>
								</li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li>
									<a href="#" aria-label="Next">
										<span aria-hidden="true">»</span>
									</a>
								</li>
							</ul>
						</nav>
							</div>
							<div class="col-md-4 w3-agile-blog-right">
								<h3>Categories</h3>
								<ul>
									<li><a href="#">Aliquam erat volutpat</a></li>
									<li><a href="#">Integer rutrum ante eu lacus</a></li>
									<li><a href="#">Cum sociis natoque penatibus</a></li>
									<li><a href="#">Mauris fermentum dictum magna</a></li>
									<li><a href="#">Sed laoreet aliquam leo</a></li>
									<li><a href="#">Cum sociis natoque penatibus</a></li>
								</ul>
								<div class="agile-info-recent">
									<h3>Recent Posts</h3>
									<div class="w3ls-recent-grids">
										<div class="w3l-recent-grid">
											<div class="wom">
												<a href="#"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
											</div>
											<div class="wom-right">
												<h4><a href="#">Integer rutrum ante eu</a></h4>
												<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
													Ut tellus dolor, dapibus eget.</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="w3l-recent-grid">
											<div class="wom">
												<a href="#"><img src="images/6.jpg" alt=" " class="img-responsive" /></a>
											</div>
											<div class="wom-right">
												<h4><a href="#">Integer rutrum ante eu</a></h4>
												<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
													Ut tellus dolor, dapibus eget.</p>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="w3l-recent-grid">
											<div class="wom">
												<a href="#"><img src="images/13.jpg" alt=" " class="img-responsive" /></a>
											</div>
											<div class="wom-right">
												<h4><a href="#">Integer rutrum ante eu</a></h4>
												<p>Mauris fermentum dictum magna. Sed laoreet aliquam leo. 
													Ut tellus dolor, dapibus eget.</p>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
								</div>
								<div class="footer-top-grid1">
									<h3>Tags</h3>
									<ul class="w3-tag2">
										<li><a href="#">Lorem</a></li>
										<li><a href="#">Ipsum </a></li>
										<li><a href="#">Dolor </a></li>
										<li><a href="#">Amet</a></li>
										<li><a href="#">Consectetur </a></li>
										<li><a href="#">Adipiscing </a></li>
										<li><a href="#">Phasellus</a></li>
										<li><a href="#">Rhoncus</a></li>
										<li><a href="#">Varius</a></li>
										<li><a href="#">Praesent</a></li>
										<li><a href="#">Congue</a></li>
										<li><a href="#">Convallis</a></li>
										<li><a href="#">Viverra</a></li>
										<li><a href="#">Auctor</a></li>
										<li><a href="#">Maximus</a></li>
										<li><a href="#">Vivamus</a></li>
										<li><a href="#">Lectus</a></li>
										<li><a href="#">Ultricies</a></li>
									</ul>
								</div>
							</div-->
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