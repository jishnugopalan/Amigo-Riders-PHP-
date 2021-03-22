<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];
$msg=$_POST["msg"];
$fid=$_POST["fid"];

$sql="SELECT * FROM u_r_reg where email='$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$name1=$row["name"];
		//$eid=$row["email"];
	}
}

$sql2="SELECT * FROM u_r_reg where email='$fid'";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$name2=$row["name"];
		//$eid=$row["email"];
	}
}


$sql1="INSERT INTO chat_messages(email,femail,sender_name,reciever_name,msg,mdate)values('$id','$fid','$name1','$name2','$msg',NOW())";
if(mysqli_query($conn,$sql1))
{
	//echo "inserted";
}

$sql3="SELECT * FROM chat_messages WHERE email='$id' and femail='$fid' or email='$fid' and femail='$id' ORDER BY msg_id ASC";
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
