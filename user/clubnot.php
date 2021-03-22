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
.blog{
	border-style: solid;
	border-radius: 10px;
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
			session_start();
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
				<h2>NEWS FEEDS</h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>
	<!-- //banner -->
	<!-- blog -->
	<?php
include "dbconn.php";
$sql="SELECT notification.nid,notification.header,notification.body,notification.type,notification.ndate,notification.email,club_reg.clubname,club_reg.photo FROM notification INNER JOIN club_reg ON notification.email=club_reg.email order by notification.ndate DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
          $bid=$row["nid"];
          $head=$row["header"];
          $blog=$row["body"];
          $type=$row["type"];
          $date=$row["ndate"];
          $name=$row["clubname"];
          $photo='../profile/'.$row["photo"];
?>
<br>
	<div class="blog">
			<div class="container">
				
				<!-- news -->
				<div class="w3layouts-news">
						<div class="agile-its-news-grid">
							<div class="col-md-8 w3ls-blog-left">
								<div class="w3-blog-left-grid">
									<!--div class="w3ls-blog-leftl">








										<h4><?php echo $date ?> <span></span></h4-->
										<!--a href="#"><i class="fa fa-tags" aria-hidden="true"></i> </a-->
									</div>
									<div class="w3ls-blog-leftr">
										
										<h2><img class="p"  src="<?php echo  $photo; ?>" alt="" width="150" height="150"/>
										<?php echo $name ?></h2>
										<h3><?php echo $blog ?></h3>
										<!--a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a-->
										<p><?php echo $head ?></p>

										
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
	echo "no";
}
?>

	<!-- // blog -->
	<!-- footer -->
	<br>
	<div class="w3-agile-footer">
		<div class="container">
			<div class="footer-grids">
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Address</h4>
					</div>
					<div class="footer-grid-info">
						<p>Eiusmod Tempor inc
							<span>St Dolore Place,Kingsport 56777.</span>
						</p>
						<p class="phone">Phone : +1 123 456 789
							<span>Email : <a href="mailto:example@email.com">mail@example.com</a></span>
						</p>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Navigation</h4>
					</div>
					<div class="footer-grid-info">
						<ul>
							<li><a href="about.html">About</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="icons.html">Icons</a></li>
							<li><a href="codes.html">Codes</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Latest Posts</h4>
					</div>
					<div class="w3agile_footer_grid_list">
						<ul>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Vestibulum ante ipsum</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Phasellus at eros</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Mauris eleifend aliquet</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Aliquam vitae tristique</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Pellentesque lobortis</li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> Class aptent taciti</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<div class="footer-grid-heading">
						<h4>Twitter Posts</h4>
					</div>
					<div class="w3agile_footer_grid_list w3agile-post">
						<ul>
							<li>Ut aut reiciendis voluptatibus <a href="#">http://example.com</a> alias, ut aut.
								<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
							<li>Itaque earum rerum hic tenetur a sapiente <a href="#">http://example.com</a> ut aut.
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits-w3layouts-copyright">
				<p>© 2017 Njoy Trip . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<script src="js/SmoothScroll.min.js"></script>
</body>	
</html>