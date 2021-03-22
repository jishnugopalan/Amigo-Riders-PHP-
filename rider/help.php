<?php
session_start();
$id=$_SESSION["email"];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
<link href="css1/demo-page.css" rel="stylesheet" media="all">
    <link href="css1/imagehover.min.css" rel="stylesheet" media="all">
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
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
<style type="text/css">
	body{
		background-color: white;
	}
	.header{
		padding-top: 50px;
		background-image: url(images/contact.jpg);
		background-repeat: no-repeat;
		background-size: cover;


	}
	.name{
		padding: 300px;
		text-align: center;
		

	}
	h2{
		font-size:-webkit-xxx-large;

	}
	.imgcard{
width: 300px;
height: 200px;
}
</style>
</head>
<body>
	<div id="toggle_m_nav">
			  <div id="m_nav_menu" class="m_nav">
				<div class="m_nav_ham" id="m_ham_1"></div>
				<div class="m_nav_ham" id="m_ham_2"></div>
				<div class="m_nav_ham" id="m_ham_3"></div>
			  </div>
			</div>
	<?php
	include"header.php";
	?>

<div class="header">
	<div class="name">

	<h2><font color="black">AMIGO RIDERS</font><br>
		<h3>The explorers</h3></h2>
</div>
</div>
<br><br>

<div class="container">
	<h1>About </h1>
<p>The "AMIGO RIDERS" is created for riders explore the dream destination and ride on the motorcycle.
It is similar to social media application for riders who can share memories, create different and explore more on motor cycling. The riders are categorized into two sections Expert riders and Normal riders. Expert riders can create various Guided Motorbike holiday tour to various destinations. Normal riders can join to these trips. This application also provides a platform for selling bikes. Various clubs can create their own events and users can join. Only expert riders can participate on these events. The admin validate different trips, selling and events. Only the approved trips, selling and events are available for users. A Chatting section is also available for users to communication. Their  is  a section for blog were users can share their touring images, videos , etc..</p>
</div>
<div class="container">
	<h3>Blog</h3><br>
	<img class="card-img-top imgcard img-fluid" src="images/blog.jpg" alt="Card image cap">
	<p>It is a platfom for express your feelings and activities.Here you can upload videos and images about your blogs.The blogs will be displayed for all riders.The riders can like and comment a blog.You cand edit your blog after uploading.You can also delete unnecessory comments from your blogs.The uploading images and videos will be displayed in your gallery.</p>
</div>
<div class="container">
	<h3>Trips</h3>
	<img class="card-img-top imgcard" src="images/goride.jpg" alt="Card image cap">
	<p>Here you can create trips to various destination.If you plan a trip the you should aware of the destination and the path.If you created a trip then you are the leader of your group.So you are able to manage that trip like a guide and you are able to proivide proper guidence to your trip squad.When the trip started then you should care your team till the end.The trip will be verified by admin.You can edit your trip details and these details will be also verified by admin.So you need to add proper information about the trip, otherwise it will be rejected. <!-- These trips are created by expert riders and also approved by admin.So you can join on any trips.For more information you can chat with riders.Only varified trips are displayed for you.
	</p></div> -->
	<div class="container">
		<h3>Sell Bikes</h3>
		<img class="card-img-top imgcard" src="images/selling.jfif" alt="Card image cap">
		<p>This is a platform for selling your bikes.So you need to submit the proof like RC Book and License.This is a cash on delivery process. So other riders may chat with you.You can make a better deal with them.The detailes that you are uploaded will be verified by admin.So you need to add proper information about the bike,otherwise it will be rejected.</p></div>

		<div class="container">
		<h3>Events</h3>
		<img class="card-img-top imgcard" src="images/events.jpg" alt="Card image cap">
		<p>The clubs provide a platform for participating bike riders in their events.So you can join their events.The evnet has a booking fee and amazing prizes.You need to pay the fee at the venue.These events are verified by admin.You need to keep track of the club by seeing their updates.</p></div>


<div class="container">
	<h3>Club Updates</h3>
	<img class="card-img-top imgcard" src="images/clubupdates.png" alt="Card image cap">
	<p>Here you can see the blogs of different bike riding clubs.You can like and comment these blogs.The blogs contain introduction of new bikes and their events.So you can track all activites of clubs.
	</p></div>

		<?php
		include"footer.php";
		?>

    



</body>
</html>