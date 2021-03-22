<?php
include"dbconn.php";
$t=$_GET["q"];


$sql="SELECT * FROM event_reg a,u_r_reg b where a.event_id='$t' and a.email=b.email";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
	?>
    
   
           
<!DOCTYPE html>
<html>
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
<style type="text/css">
	img.p{

 border-radius: 100%; 
 font-size: large;
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
</style>
</head>
<body>

<center><h1>Members joined on my event</h1></center>
	<center>
		<table id="t01">
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone no</th> 
    <th>Joined on</th>
  </tr>

<?php
 while($row = mysqli_fetch_assoc($result)) {
    	 
           $name=$row["name"];
           $ph=$row["phone"];
           $tdate=$row["edate"];
                 $email=$row["email"];
                  //$name=$row["clubname"];
                   $photo='../profile/'.$row["photo"];
                   ?>

 <tr>
    <td><?php echo $name ?></td>
    <td><?php echo $email ?></td>
    <td><?php echo $ph ?></td>
    <td><?php echo $tdate ?></td>
  </tr>



										
										<!--a href="#"><i class="fa fa-tags" aria-hidden="true"></i> </a-->
									</div>
									<div class="w3ls-blog-leftr">
										
										<!-- <form action="javascript:;" onsubmit="ajaxFunction('likecount.php?c=' + <?php echo $bid ;?>); " method="#"
									 --><!-- 	<div class="h">
										<h2><img class="p"  src="<?php echo  $photo; ?>" alt="" width="150" height="150"/>
                                        <font color="white">
										<?php echo $name ?> </font></h2>
									</div>
                                         <div class="b">
										Joined on:<?php echo $tdate ?><br>
										Email:<?php echo $email ?><br>
										Phone:<?php echo $ph ?><br> -->
										<!--a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a-->
										
			

											<?php
									    }
           }
           else{
           	echo "<h1><center>No members joined in this event</center></h1>";
           }
           ?>
</div>
</div>
</body>
</body>
</html>