<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];

$sql3="SELECT * FROM chat_messages WHERE email='$fid' and femail='$id'";
$result=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$message=$row["msg"];
		//$eid=$row["email"];
		
				echo "me:";
 echo $message;
 echo "<br>";
	}
}

?>