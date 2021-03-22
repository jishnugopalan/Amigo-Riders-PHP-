<?php
include"dbconn.php";
$t=$_GET["q"];


$sql="SELECT * FROM trip a,u_r_reg b where a.trip_id='$t' and a.email=b.email and a.admin_s='y'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	 $bid=$row["trip_id"];
    	 $dest=strtoupper($row["destination"]);
           $start=strtoupper($row["starting_place"]);
            $sdate=strtotime($row["starting_date"]);
             $edate=strtotime($row["ending_date"]);
              $no=$row["no_of_person"];
               $description=$row["description"];
                $status=$row["status"];
                 $email=$row["email"];
                  $name=$row["name"];
                   $photo=$row["photo"];
                   $ph=$row["phone"];
               }
           }
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
body{
	font-size: normal;
}
</style>
</head>
<body>

<div class="blog">
			<div class="container">
				
				<!-- news -->
				<div class="w3layouts-news">
						<div class="agile-its-news-grid">
							<!-- <div class="col-md-8 w3ls-blog-left"> -->
								<!-- <div class="w3-blog-left-grid"> -->
									<!-- <div class="w3ls-blog-leftl"> -->








										
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
                                         	<br><br>
										Destination:<?php echo $dest ?><br>
										Starting place:<?php echo $start ?><br>
										Starting date:<?php echo date('d-m-Y',$sdate) ?><br>
										Ending date:<?php echo date('d-m-Y',$edate) ?><br>
										Number of days:<?php
                        $y=$edate - $sdate;
                        ?>
                        <?php echo ($y / (60* 60 * 24)); ?><br>
										<!-- <h3>No of persons can join:<?php echo $no ?></h3> -->
										Description<br><?php echo $description ?><br>
										<!-- Email:<?php echo $email ?><br>
                                        Phone:<?php echo $ph ?> -->
										<!--a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a-->
										<p></p>
										


                                            <br>
                                                	<?php
                                                	$z=date("Y-m-d");
      $y=strtotime($z);
      $x=$sdate-$y;
      if($x<=0){
      	echo "<font color='green'>You are joined in this trip</font>";
      }
      	else
      	{
      	?>
											<a class="" href="deletetrip.php?id=<?php echo $bid ?>&email=<?php echo $email ?>"><button class="btn btn-danger">  Disjoin Now</button></a>
											<a href="chat/my.php?eid=<?php echo $email ?>"><input type="button" class="btn btn-success" value="Chat Now"></a>
											<br><br>
										</div>
										<?php
									}
									?>

										</ul>
										<!--div class="more">
											<a href="single.html">Read More</a>
										</div-->
									</form>
									</div>

									<div class="clearfix"> </div>
								</div>


</body>
</html>