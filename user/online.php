<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];

$sql="UPDATE login SET online='1' where email='$id'";
if(mysqli_query($conn,$sql))
{

}
?>