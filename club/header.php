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
?>

	<div id="m_nav_container" class="m_nav">
			  <ul id="m_nav_list" class="m_nav">
				<li class="active">  <a href="index.php"><img src="images/home.png" width='20' height='20'></a> </li>
				
				   <!-- <li><br> <a href="#c2">Blogs</a><br></li> -->
				<?php 
				//echo "<li><br><a href='blog/blog1.php'><img src='images/blog-icon-transparent-1.jpg' width='20' height='20'></a><br></li>";
				// echo "<li><br><a href='blog/blogs/blogupdate.php'>My Blogs</a><br></li>";
				// echo "<li><br><a href='post.php'>Post</a><br></li>";
				echo "<li><br><a href='notification.php'><img src='images/Notification-512.png' width='20' height='20'>";echo"<font color='red'>(",$no,")</font>";echo"</a><br></li>";
				   //echo "<li><br><a href='notification.php'>Notification";echo"<font color='red'>(",$no,")</font>";echo"</a><br></li>";
				  //echo "<li><br><a href='../Image upload/upload2.php'>Upload image</a><br></li>";
				  //echo "<li><br><a href='../Upload Video/index2.php'>Upload Video</a><br></li>";
				   //echo "<li><br><a href='../login/logout.php'>Logout</a><br></li>";

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

				
			 