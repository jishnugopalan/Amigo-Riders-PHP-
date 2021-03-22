<?php
include"dbconn.php";
session_start();
//$id=$_SESSION["email"];
$t=$_GET["q"];


$sql="SELECT * FROM event a,club_reg b where b.email=a.email and a.event_id='$t' and a.admin_s='y'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	  $bid=$row["event_id"];
          $type=$row["event_type"];
           $eventname=$row["name"];
             $edate=strtotime($row["edate"]);
             $etime=$row["etime"];
             $place=$row["place"];
              $no=$row["no_of_person"];
               $description=$row["description"];
               $bfee=$row["booking_fee"];
               $price=$row["event_price"];
                $status=$row["status"];
                 $email=$row["email"];
                  $name=$row["clubname"];
                   $photo='../profile/'.$row["photo"];
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
</style>
</head>
<body>

<div class="blog">
			<div class="container">
				
				<!-- news -->
				<div class="w3layouts-news">
						<!-- <div class="agile-its-news-grid"> -->
							<!-- <div class="col-md-8 w3ls-blog-left"> -->
								<div class="w3-blog-left-grid">
								<!-- 	<div class="w3ls-blog-leftl">
 -->







										
										<!--a href="#"><i class="fa fa-tags" aria-hidden="true"></i> </a
									</div>
									<div class="w3ls-blog-leftr">
										
										<!-- <form action="javascript:;" onsubmit="ajaxFunction('likecount.php?c=' + <?php echo $bid ;?>); " method="#"
									 -->	<div class="h">
										<img class="p"  src="<?php echo  $photo; ?>" alt="" width="100" height="100"/>
                                        <font color="white">
										<?php echo $name ?> </font>
									</div>
									<br>
                                         <div class="b">
										Event name:<?php echo $eventname ?><br>
										Event type:<?php echo $type ?><br>
										Event date:<?php echo date("d-m-Y",$edate) ?><br>
										Event time:<?php echo $etime ?><br>
										Event place:<?php echo $place ?><br>
										No of persons can participate:<?php echo $no ?><br>
										Description<p><?php echo $description ?></p><br>
										Event booking Fee:<?php echo $bfee ?><br>
										Event prize:<?php echo $price ?><br>
										Email:<?php echo $email ?><br>
										<!--a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a-->
										<p></p>
										

                                           <?php
                                           $t=date("Y-m-d");
                                           $x=$edate;
											$y=strtotime($t);
											$xy=$x - $y;
											$z=($xy/(60 * 60 * 24));

											if($z<=0)
                                           	echo"<font color='green'>You are joined in this event</font>";
                                           else{


                                           ?>
                                            
											<a class="" href="deleteevent.php?id=<?php echo $bid ?>&cemail=<?php echo $email?>"><button class="btn btn-danger">  Disjoin Now</button></a>
											<?php
										}
										?>
										</div>

										<br><br>
										<!--div class="more">
											<a href="single.html">Read More</a>
										</div-->
									</form>
									</div>
<?php
   }
           }
           else{
           	echo "No events";
           }
           ?>
									<div class="clearfix"> </div>
								</div>


</body>
</html>