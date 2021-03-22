<?php
include "dbconn.php";
session_start();
$a=$_POST["email"];
//$id=$_SESSION["email"];



 $sql="SELECT * FROM login where email='$a'";
 $result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
	$_SESSION['email']=$a;
 header('location:index1.php');

}
else {
   header('location:error/index.php');
}
?>