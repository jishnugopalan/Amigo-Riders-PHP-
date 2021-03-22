<?php
include "dbconn.php";
session_start();
$a=$_POST["name"];
$b=$_POST["place"];
$c=$_POST["day"];
$d=$_POST["Time"];
$g=$_POST["nop"];
$h=$_POST["etype"];
$i=$_POST["epf"];
$j=$_POST["ewp"];
$k=$_POST["des"];
$l=$_POST["status"];
$id=$_SESSION["email"];

$sql = "INSERT INTO event(name,place,edate,etime,no_of_person,description,booking_fee,event_price,status,event_type,email)VALUES('$a','$b','$c','$d','$g','$k','$i','$j','$l','$h','$id')";
if (mysqli_query($conn, $sql)) {

// $sql2="INSERT INTO notification (email,header,body,ndate,type) VALUES ('$id','$a','Added an event',NOW(),'club')";
//  if (mysqli_query($conn, $sql2)) {
	   ?>
        <script type="text/javascript">
            alert("Your event created successfully.You need to wait for admin approval");
            window.location="../index.php";
        </script>
        <?php
 	
 	//header('location:../index.php');
 // }
 // else{
 // 	 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 // }
 //    echo "";
 //    header('location:../index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
