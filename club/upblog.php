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
.space{
  /*padding-left: 100px;*/
}
h2{
  color:royalblue;
}
/*input[type="text"]{
  color:red;
}*/
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
             include "header.php";
			?>
		<!-- menu -->
		<div class="container">
			<div class="agile-left">
				
			</div>
			<!-- wthree-top-grid -->
			<div class="wthree-top-grid">
				<h1><a href="">AMIGO RIDERS</a></h1>
				<div class="w3-agileits-border"> </div>
				<h2>Edit Blog</h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>
	<!-- //banner -->
	<!-- blog -->

	
		<br><br>
    <div class="space">
<?php
$bid=$_GET["bid"];
$sql="SELECT * FROM blog a,club_reg b where a.email='$id' and b.email='$id' and blog_id='$bid'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          $bid=$row["blog_id"];
          $head=$row["blog_header"];
          $blog=$row["blog_content"];
          $date=$row["blog_date"];
          $name=$row["clubname"];
          $type=$row["filetype"];
          //$photo='../'.$row["photo"];

          
          

         
?>
<?php
                                                    if($type=='image')
          {
            //echo "<h3>Uploaded an image</h3>";
            $image='../create blog/'.$row["url"];
          echo "<img src='$image' width='300'>";
          echo"<br>";
          
          }
          if($type=='video')
          {
            $video='../create blog/'.$row["url"];
            echo "<video controls  width='300'><source src='$video' type='video/mp4' />";
                                            echo"<br>";
                                        }
                                            ?>



                  
              
            </div>
        
                                                    <?php
}
}
else{
  echo "<center><h1>No Blogs</h1></center>";
}
?>
	
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
									
									<!-- <div class="w3ls-blog-leftr">
										
										<h3><img class="p"  src="<?php echo  $photo; ?>" alt="" width="150" height="150"/>
										<?php echo $name ?></h3> -->
										   <form action="updateblog.php" method="post" enctype="multipart/form-data">
										   	<input type="hidden" value="<?php echo  $bid; ?>" name="sid">

     
<div class="space">
	<input type="hidden" value="<?php echo $bid ?>" name="bid">
	<div class="form-group">
	<label for="usr">Header</label><br>
	<div class="col-xs-3"><input type="text" class="form-control" id="usr" value="<?php echo $head ?>" name="head"  required="" autocomplete="off">	
	</div>
</div><br><br>
<div class="form-group">
	<label for="usr">Blog</label>
	<textarea name="blog" class="form-control" rows="5" id="comment"><?php echo $blog ?></textarea><!-- <input type="text" class="form-control" id="usr" value="<?php echo $blog ?>" placeholder="Edit blog" name="blog" cols="45" rows="10"  required="" size="50" autocomplete="off"> -->
</div>				 	
    
    <input type="submit" class="btn btn-success" name="update" value="Update">
    
    <!-- <input type="submit" name="delete" value="Delete"> --><br>
  





 
</form>
</center>
</div>

	<!-- // blog -->
	<!-- footer -->
	<?php
	include"footer.php";
	?>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
</body>	
</html>