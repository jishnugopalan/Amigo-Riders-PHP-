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

<style type="text/css">
	img.p{

 border-radius: 100%; 
 font-size: large;
}
body{
	font-size:large;
}
</style>
</head>
<body>
	<!-- <div class="banner">
		<!-- menu -->
		<!-- 	<div id="toggle_m_nav">
			  <div id="m_nav_menu" class="m_nav">
				<div class="m_nav_ham" id="m_ham_1"></div>
				<div class="m_nav_ham" id="m_ham_2"></div>
				<div class="m_nav_ham" id="m_ham_3"></div>
			  </div>
			</div> -->

	<!-- 		<?php
			//session_start();
             //include "header.php";
			?> -->
			<!-- <div class="container">
			<div class="agile-left">
				
			</div> -->
			<!-- wthree-top-grid -->
			<!-- <div class="wthree-top-grid">
				<h1><a href="">AMIGO RIDERS</a></h1>
				<div class="w3-agileits-border"> </div>
				<h2>Chats</h2>
			</div> -->
			<!-- //wthree-top-grid -->
		<!-- </div>
	</div> --> 

<!-- <center><h1><font color="black"><B>Select your friend</B></font></h1>
<input type="text" name="friend" id="friend" placeholder="search"><input type="button" value="search" onclick="getFriend()"></center> -->
<div id=me></div>
<hr>
<div id="messages"></div>
<?php
//session_start();
$id=$_SESSION["email"];
$sql="SELECT * FROM u_r_reg a,chat_messages c where c.femail='$id' and c.cstatus='0' and a.email!='$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$name=$row["name"];
		$eid=$row["email"];
		$imageURL = '../../profile/'.$row["photo"];
    
    $sql2="SELECT COUNT(*) FROM chat_messages where femail='$id' and cstatus='0'";
    $result1=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result1) > 0)
{
	while($row1=mysqli_fetch_assoc($result1))
	{
	$no=$row1["COUNT(*)"];
}
}
?>
	<font color="black"><img class="p"  src="<?php echo  $imageURL; ?>" alt="" width="100" height="100"/>
	</a><b><?php echo $name ?></b><font color="red">(<?php echo $no?>)</font></font>
<input type="hidden" value="<?php echo $eid ?>" name="email">
<a href="my.php?eid=<?php echo $eid ?>"><input type="button" value="chat"></a><br>
<hr>

<?php
	}
}
?>

</body>
</html>
