<?php
	session_start();
	include "dbconn.php";
$id=$_SESSION["email"];
?>
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
}
input[type="file"]{
	font-size:x-large;
}
input[type="submit"]{
	font-size: x-large;
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
	background-image: url("images/cover.jpg");
	background-repeat: no-repeat;
	background-size: cover;
}

</style>



</head>
<body>
	<div class="banner">
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
			<div class="container">
			<div class="agile-left">
				
			</div>
			<!-- wthree-top-grid -->
			<div class="wthree-top-grid">
				<h1><a href="">AMIGO RIDERS</a></h1>
				<div class="w3-agileits-border"> </div>
				<h2>My Gallery</h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>

<CENTER><h1 id="c1">GALLERY</h1>

<a href=<?php echo "'../create blog/index.php'" ?> ><input type="text" placeholder="write something here"></a><font color="black">Write Your Travel Blogs</h2> </font><br></CENTER>
	
	<div class="gallery">
		<div class="container"> 
			<div id="jzBox" class="jzBox">
				<div id="jzBoxNextBig"></div>
				<div id="jzBoxPrevBig"></div>
				<img src="#" id="jzBoxTargetImg" alt=""/>
				<div id="jzBoxBottom">
					<div id="jzBoxTitle"></div>
					<div id="jzBoxMoreItems">
						<div id="jzBoxCounter"></div>
						<i class="arrow-left" id="jzBoxPrev"></i> 
						<i class="arrow-right" id="jzBoxNext"></i> 
					</div>
					<i class="close" id="jzBoxClose"></i>
				</div>
			</div>
				<?php
include "dbconn.php";
$id=$_SESSION["email"];
$query = $conn->query("SELECT * FROM blog where filetype='image' and email='$id'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = '../create blog/'.$row["url"]; 


							
	?>
			<div class="gallery-grids-row">

				<div class="col-md-4 gallery-grid">
					<div class="wpf-demo-4"> 

					
						<a href="<?php echo $imageURL; ?>" class="jzBoxLink item-hover" title="">  
							<img src="<?php echo $imageURL; ?>" alt="" class="img-responsive" />
							<div class="view-caption">
								<p>Full View</p>
							</div> 
						</a>
                        

					</div>
	


				</div>

	
			</div>
<?php }
}else{ ?>
    <p><!-- Create Your Gallery.... --></p>

<?php } 
?>

		</div>
	</div>
	

<div class="clearfix"> </div>
<div class="vid">
					
							<?php
								$query = $conn->query("SELECT * FROM blog where filetype='video' and email='$id'");
								while($row = $query->fetch_assoc()){
								//$video_id = $row['item_id'];
							?>
							 <!--video id="example_video_1" class="video-js vjs-default-skin" controls preload="none" width="640" height="264"
      poster="http://video-js.zencoder.com/oceans-clip.png"
      data-setup="{}"-->
      <video class="v" controls  width="400" height="400">
        <source src="../create blog/<?php echo $row['url']; ?>" type='video/mp4' /> 
							<!--video controls  width="400" height="400">
        
				<source src="upload video/upload/<?php echo $row['url']; ?>" type='video/mp4'>
				</video-->
								
							
						</video>
						<?php
							} 
							?>
						</div>
						<hr>
</body></html>