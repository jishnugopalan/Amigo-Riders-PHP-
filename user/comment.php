<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
// $sid=$_POST["sid"];
// $com=$_POST["com"];
//echo $sid;
$c=$_POST["com"];
$s=$_POST["sid"];


// <!-- <script type="text/javascript">
// 	alert("inserting");
// 	window.location="buybikes.php";

// </script> -->

$sql="INSERT INTO comment(sell_id,content,cdate,email)values('$s','$c',NOW(),'$id')";
if(mysqli_query($conn,$sql))
{

    
 
	// $sql2="SELECT * FROM comment where sell_id='$s'";
	// $result=mysqli_query($conn,$sql2);
	// if(mysqli_num_rows($result)>0)
	// {
	// 	while($row=mysqli_fetch_assoc($result))
	// 	{
			// $com=$row["content"];
			// echo $com;
			// //echo $sid;
			// echo "<br>";
			echo "Your comment will be displayed after the approval of admin";

	// 	}
	// }

	

}
?>