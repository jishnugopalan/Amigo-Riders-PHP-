<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
$id=$_SESSION["email"];
$t=date("Y-m-d");
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



function ajaxFunction(ed) {
    //noConflict();
    //console.log()
        // var f=document.getElementById('sid_'+bid).value;
        var a=document.getElementById("edate").value;
         
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "dateval.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            sdate:ed,
         edate:a
        },
      success: function(data){
        $("#like").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});

      

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
input[type="text"]{
color:black;
}
input[type="date"]{
color:black;
}
.b{
	background-color: black;
	color:white;
	text-align: center;
}
.h{
	background-color: royalblue;
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
				<h2>View My Trips</h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>
	
		</center>

	<!-- //banner -->
	<!-- blog -->
<?php
	//session_start();
$t=date("Y-m-d");
include "dbconn.php";
$tid=$_GET["sid"];

$sql="SELECT * FROM trip a,u_r_reg b  where a.trip_id='$tid' and b.email='$id' order by a.trip_id DESC";
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

	<form action="updatetrip.php" method="post">
		
					
	


	<center><font color="blue" size="5px">Update Trip To <?php echo strtoupper($dest) ?></font></center>
								
                                      
    <input type="hidden" value="<?php echo $bid ?>" name="tid"></td>
<div class="form-group">
   <label for="usr">Destination</label> <input type="text" value="<?php echo $dest ?>" class="form-control" id="usr" name="dest" required="" pattern="[A-Za-z ]{3,}">
</div>
<div class="form-group">
   <label for="usr">Starting Place</label><input type="text" value="<?php echo $start ?>" name="splace" class="form-control" id="usr" required="" pattern="[A-Za-z]{3,}">

</div>
<div class="form-group">
	<div class="col-xs-3">
   <label for="usr">Starting Date:</label> <input type="date" value="<?php echo $sdate ?>" name="sdate" class="form-control" id="sdate" required="" pattern="[A-Za-z]{3,}" min="<?php echo $t ?>" onchange="ajaxFunction(this.value)">
</div>
</div>
<div class="form-group">
	<div class="col-xs-3">
  <label for="usr">Ending Date:</label>  <input type="date" value="<?php echo $edate ?>" name="edate" class="form-control" id="edate" required="" min="<?php echo $t ?>">
</div>


</div>

 </div><div class="clearfix"></div>
 <div id="like"></div>
<div class="form-group">
	
     <label for="usr">Number of bikes</label><input type="number" value="<?php echo $no ?>" name="no" class="form-control" id="usr" required="" min="3">
     
 </div><div class="clearfix"></div>
 <div class="form-group">
    <label for="usr">Description</label><textarea name="description" class="form-control" rows="5" id="comment" required=""><?php echo $description ?></textarea>
    	<!-- <input type="text" value="<?php echo $description ?>" name="description" class="form-control" id="usr"> -->
</div>
<?php
$x=strtotime($sdate);
$y=strtotime($t);
if($y-$x<0)
{
?>
    <button type="submit" class="btn btn-success" name="update">Update Trip</button>
    <?php
}
else
echo"<h3><font color='red'>Sorry you cannot able to update the trip</font></h>";
?>

<button type="submit" class="btn btn-danger" name="delete">Delete Trip</button></td>  

									
                                             
                                         <!-- <div class="b">
                                         	<input type="hidden" value="<?php echo $bid ?>" name="tid">
										<h3>Destination:<br><input type="text" value="<?php echo $dest ?>" name="dest"></h3>
										<h3>Starting place:<br><input type="text" value="<?php echo $start ?>" name="splace"></h3>
										<h3>Starting date:<br><input type="date" value="<?php echo $sdate ?>" name="sdate"></h3>
										<h3>Ending date:<br><input type="date" value="<?php echo $edate ?>" name="edate"></h3>
										<h3>No of persons can join:<br><input type="text" value="<?php echo $no ?>" name="no"></h3>
										<h3>Description<p><input type="text" value="<?php echo $description ?>" name="description"></p></h3> -->
										<!-- Email:<?php echo $email ?><br>
                                        Phone:<?php echo $ph ?> -->
										<!--a href="single.html"><img src="images/10.jpg" alt=" " class="img-responsive" /></a-->
										<!-- <p></p>
										<ul>


                                            
											<li><button class="" type="submit" name="update"><font color="black">Update Trip</font></button></li>
											<li><button class="" type="submit" name="delete"><font color="black">Delete Trip</font></button></li>
										</div> -->

										
										<!--div class="more">
											<a href="single.html">Read More</a>
										</div-->
<!-- 
									</div>

									<div class="clearfix"> </div>
								</div>



								
							<div class="clearfix"> </div>
						</div>
				</div>
				//news -->
			<!-- </div>


	</div> --> 
	<?php
}

}
else{
	echo "<center><h1>No Trip Found</h1></center>";
}

?>

					</form>

					 
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