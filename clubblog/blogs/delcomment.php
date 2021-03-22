<?php
$cid=$_POST["sid"];
include"dbconn.php";
session_start();
$id=$_SESSION["email"];

$sql="DELETE FROM comment where item_id='$cid' and email='$id'";
if(mysqli_query($conn,$sql))
{
	echo "<font color='red'>comment deleted</font>";
}
?>