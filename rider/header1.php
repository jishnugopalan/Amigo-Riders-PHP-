<?php
include"dbconn.php";
//session_start();
$id=$_SESSION["email"];

$sql="SELECT COUNT(*) FROM notification where email='$id' and nstatus='0'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)
{
	while($row=mysqli_fetch_assoc($result))
	{
	$no=$row["COUNT(*)"];
}
}

$sql2="SELECT COUNT(*) FROM chat_messages where femail='$id' and cstatus='0'";
    $result1=mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result1) > 0)
{
	while($row1=mysqli_fetch_assoc($result1))
	{
	$cno=$row1["COUNT(*)"];
}
}
?>
<?php 
include "dbconn.php";

$query = $conn->query("SELECT * FROM u_r_reg where email='$id'");       

if($query->num_rows > 0){

    while($row = $query->fetch_assoc()){
    
        $imageURL = '../profile/'.$row["photo"];
        $name=$row["name"];
       
        
    }
    
        }
        
        else{
        	echo "";
        } 
    
?>


<div id="m_nav_container" class="m_nav">


			  <ul id="m_nav_list" class="m_nav">

			  	<!-- <li class="active"><font color="black"><img class="p"  src="<?php echo  $imageURL; ?>" alt="" width="75" height="75"/>
	<b><?php echo $name ?></b></font></li> -->
			  	<li class="active"> <a href="index.php"><img src="images/home.png" width='20' height='20'></a> </li>
			  	<!-- <li><br> <a href="#c1">Gallery</a><br></li> -->
			  	<!--li><br> <a href="#c2">Blogs</a><br></li-->
				<?php 
				// echo "<li><br><a href='profile.php'>Profile</a><br></li>";
				echo "<li><br><a href='blog/blog1.php'><img src='images/blog-icon-transparent-1.jpg' width='20' height='20'></a><br></li>";
				// echo "<li><br><a href='blog/blogs/blogupdate.php'>My Blogs</a><br></li>";
				// echo "<li><br><a href='post.php'>Post</a><br></li>";
				echo "<li><br><a href='notification.php'><img src='images/Notification-512.png' width='20' height='20'>";echo"<font color='red'>(",$no,")</font>";echo"</a><br></li>";
				  // echo "<li><br><a href='clubpost.php'>Club Zone</a><br></li>";
				// echo "<li><br><a href='vtrips/trip.php'>Join Trip</a><br></li>";
				// echo "<li><br><a href='mytrip.php'>My Trips</a><br></li>";
				// echo "<li><br><a href='bikes.php'>Buy Bikes</a><br></li>";
				echo "<li><br><a href='chat/index.php'><img src='images/images.png' width='20' height='20'>";echo "<font color='red'>(",$cno,")</font>";echo"</a><br></li>";
				//echo "<li><br><a href='../bio.html'>Bio</a><br></li>";
				 //echo "<li><br><a href='../blog/web/index.php'>Blog</a><br></li>";

				  //echo "<li><br><a href='../Image upload/upload.php'>Upload image</a><br></li>";
				  //echo "<li><br><a href='../Upload Video/index.php'>Upload Video</a><br></li>";
				  // echo "<li><br><a href='../login/logout.php'>logout</a><br></li>";
				  //echo $no;
				  ?>
				  
<li><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><img src='images/settings-icon-transparent-27.jpg' width='20' height='20'>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="profile.php">Profile</a></li>
    <li><a href="settings.php">Password</a></li>
    <li><a href="../login/logout.php">Logout</a></li>
    <li><a href="help.php">Help</a></li>
  </ul>
</div></li>
<?php

?>
				 
			  </ul>

			</div>