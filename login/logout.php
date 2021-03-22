<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];

date_default_timezone_set('Asia/Kolkata');
$t=date("h:i:s");
$sql1="UPDATE login SET online='0' where email='$id'";
if(mysqli_query($conn,$sql1))
{

}
else
echo mysqli_error($conn);

if(isset($_SESSION['email'])){
	session_destroy();
include('index.php');

}
else{
	include('index.php');
}



?>