<?php
include "dbconn.php";
session_start();
$a=$_POST["dest"];
$b=$_POST["splace"];
$c=$_POST["sdate"];
$d=$_POST["edate"];
$e=$_POST["nop"];
$f=$_POST["des"];
$g=$_POST["status"];
$id=$_SESSION["email"];

$sql = "INSERT INTO trip(destination,starting_place,starting_date,ending_date,no_of_person,description,status,email) VALUES ('$a','$b','$c','$d','$e','$f','$g','$id')";


if (mysqli_query($conn, $sql)) {
	$sql2="INSERT INTO notification (email,header,body,ndate,type) VALUES ('$id','$a','Added a trip',NOW(),'rider')";
 /*if (mysqli_query($conn, $sql2)) {
 	
 	header('location:../index.php');
 }*/

 ?>
     	<script type="text/javascript">
     		alert("Trip Created Succesfully.You have to wait for admin approval");
     		window.location="../index.php";
     	</script>
     	<?php
    //header("location:../index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>