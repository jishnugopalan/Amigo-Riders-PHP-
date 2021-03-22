<?php
include"dbconn.php";
$sql="SELECT count(admin_s) from selling where admin_s='n'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$s=$row["count(admin_s)"];
	}
}

$sql1="SELECT count(admin_s) from event where admin_s='n'";
$result1 = mysqli_query($conn, $sql1);
if (mysqli_num_rows($result1) > 0) {
	while($row = mysqli_fetch_assoc($result1)) {
		$e=$row["count(admin_s)"];
	}
}


$sql2="SELECT count(admin_s) from trip where admin_s='n'";
$result2 = mysqli_query($conn, $sql2);
if (mysqli_num_rows($result2) > 0) {
	while($row = mysqli_fetch_assoc($result2)) {
		$t=$row["count(admin_s)"];
	}
}



	?>



<ul id="m_nav_list" class="m_nav">
			  	<!-- <li class="active"> <a href="#">Admin</a> </li> -->
			    	<li><a href="index.php">Home</a></li>
			  	<li><a href="forms/index1.php">Add Country,State,District</a></li>
			  	<li><a href="trip.php">Approve Trips(<font color="red"><?php echo $t ?></font>)</a></li>
			  	<li><a href="event.php">Approve Events(<font color="red"><?php echo $e ?></font>)</a></li>
			  		<li><a href="bikes.php">Approve Sellings(<font color="red"><?php echo $s ?></font>)</a></li>
			  		<!-- <li><a href="comment.php">Approve comment</a></li> -->
				<?php 
				//echo "<li><br><a href='../bio.html'>Bio</a><br></li>";
				 //echo "<li><br><a href='../blog/web/index.php'>Blog</a><br></li>";

				  //echo "<li><br><a href='../Image upload/upload.php'>Upload image</a><br></li>";
				  //echo "<li><br><a href='../Upload Video/index.php'>Upload Video</a><br></li>";
				  echo "<li><br><a href='../login/logout.php'>Logout</a><br></li>";
				  ?>
				 
			  </ul>