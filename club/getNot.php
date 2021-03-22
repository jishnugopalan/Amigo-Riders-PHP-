<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];

$sql="UPDATE notification set nstatus='1' where email='$id'";
if(mysqli_query($conn,$sql))
{

}
?>