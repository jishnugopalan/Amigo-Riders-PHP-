<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];
//$msg=$_POST["msg"];
$fid=$_POST["fid"];


$sql3="SELECT * FROM chat_messages WHERE email='$id' and femail='$fid' or email='$fid' and femail='$id' order by msg_id ASC";
$result=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$message=$row["msg"];
		$sname=$row["sender_name"];
		$rname=$row["reciever_name"];
		$email=$row["email"];
		//$eid=$row["email"];
		
	if($email=='$id')
		
		$me=$rname;
	    else
	    $me=$sname;
	echo $me;
	echo":";
 echo $message;
 echo "<br>";
	}
}

?>