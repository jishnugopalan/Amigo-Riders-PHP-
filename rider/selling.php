<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include"dbconn.php";
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


<script type="text/javascript">
<!--

function getResult(tid) {
  var xhttp;
  if (tid == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getTrip.php?q="+tid, true);
  xhttp.send();
}

/*function ajaxFunction(bid) {
	var x=new XMLHttpRequest();
	x.open('POST' , 'likecount.php?bid='+bid, true);
			x.send();
			x.onreadystatechange = function(){
				if (x.readyState == 4 && x.status == 200)
				{
					
					document.getElementById('like').innerHTML = x.responseText;
					}
				
				}
}
function myFunction(x){
	document.getElementById('like').innerHTML = x.responseText;
}*/

//var ajaxVariable = false; // the variable which will make AJAX a possibility for our tutorial

/*function ajaxFunction(bid) {
		console.log(bid)
		$.ajax({url: "likecount.php",
		type: 'POST',
        //dataType: "json",
        data: {
            bid: bid,
        },
			success: function(result){
				$("#like").html(data);
				
    			console.log("inside success")
  			},
  			error: function(errorMessage){
  				console.log(errorMessage)
  			}});
       }*/


//-->
</script>
<!-- //menu -->
<style type="text/css">
	img.p{

 border-radius: 100%; 
 font-size: large;
}
h2{
	color:white;
}
.b{
	background-color: black;
	color:white;
	text-align: center;
}
.h{
	background-color: royalblue;
}
.button {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
@-webkit-keyframes glowing {
  0% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -webkit-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -webkit-box-shadow: 0 0 3px #B20000; }
}

@-moz-keyframes glowing {
  0% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; -moz-box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; -moz-box-shadow: 0 0 3px #B20000; }
}

@-o-keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

@keyframes glowing {
  0% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
  50% { background-color: #FF0000; box-shadow: 0 0 40px #FF0000; }
  100% { background-color: #B20000; box-shadow: 0 0 3px #B20000; }
}

* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
body{
	background-color:  rgba(0, 0, 0, .075);
}
.myclass{
	padding-left: 30px;
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
				<h2>Edit Selling</h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>
	

	<!-- //banner -->
	<!-- blog -->
	<!--?php
	//session_start();
include "dbconn.php";
$sql="SELECT * FROM trip a,u_r_reg b  where a.admin_s='y' and a.email=b.email order by a.trip_id DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
         $bid=$row["trip_id"];
          $dest=$row["destination"];
           $start=$row["starting_place"];
            $sdate=$row["starting_date"];
             $edate=$row["ending_date"];
              $no=$row["no_of_person"];
               $description=$row["description"];
                $status=$row["status"];
                 $email=$row["email"];
                  $name=$row["name"];
                   $photo=$row["photo"];
                   $ph=$row["phone"];
?>
	<div class="blog">
			<div class="container">
				
				<!-- news -->

<br><br><br><br>
	<div class="myclass">								<!-- <div class="w3-blog-left-grid"> -->
<h4><font color="blue">Here you can edit your selling.The edited selling will be send to the admin for approval.The selling will be displayed after the approval.</font></h4>
</div>		
				
<?php

$sql="SELECT * FROM selling where email='$id'";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_assoc($result)) {
 	$bid=$row["selling_id"];
          $bname=$row["bike_name"];

?>

<div class="myclass">

<input type="hidden" name="sid" value="<?php echo $bid ?>">
<h3><?php echo $bname ?></h3>
<a href="buybikes.php?sid=<?php echo $bid ?>"><button class="btn btn-success">Update</button></a>

</div>
<?php
}
}
else
echo"<h3>No sellings are available</h3>";
?>

									<!--div class="w3ls-blog-leftl">








										
										<!--a href="#"><i class="fa fa-tags" aria-hidden="true"></i> </a-->
									</div>
									<!--div class="w3ls-blog-leftr">
										<form action="#" method="#">
										<!-- <form action="javascript:;" onsubmit="ajaxFunction('likecount.php?c=' + <?php echo $bid ;?>); " method="#"
									 -->	<!--div class="h">
										<h2><img class="p"  src="<?php echo  $photo; ?>" alt="" width="150" height="150"/>
                                        
										<?php echo $name ?> </h2>
									</div>
                                         <!--div class="b">
										<h3>Destination:<?php echo $dest ?></h3>
										<h3>Starting place:<?php echo $start ?></h3>
										<h3>Starting date:<?php echo $sdate ?></h3>
										<h3>Ending date:<?php echo $edate ?></h3>
										<h3>N of persons can join:<?php echo $no ?></h3>
										<h3>Description<p><?php echo $description ?></p></h3>
										Email:<?php echo $email ?><br>
                                        Phone:<?php echo $ph ?>
										<!--a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a-->
										<p></p>
										<ul>


                                            
											<!--li><button class="button"><a class="button" href="uptrip.php?id=<?php echo $bid ?>"><font color="white"> Join Now</font></a></button></li>
										</div>

										</ul>
										<!--div class="more">
											<a href="single.html">Read More</a>
										</div-->
									</form>
									</div>

									<div class="clearfix"> </div>
								</div>



								
							<div class="clearfix"> </div>
						</div>
				</div>
				<!-- //news -->
			</div>
	</div>
																										<!--?php
}
}
else{
	echo "<h1>No Trip found</h1>";
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