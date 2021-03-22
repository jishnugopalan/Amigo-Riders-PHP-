<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
$j=$_POST["pass1"];



	$sql="UPDATE login SET password='$j' where email='$id'";
     if(mysqli_query($conn, $sql))
     {
     	
     	?>
     	<script type="text/javascript">
     		alert("Update Succesfully");
     		window.location="settings.php";
     	</script>
     	<?php

     	
     }
     ?>
    
    
