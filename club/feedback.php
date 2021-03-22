<?php
include"dbconn.php";
session_start();
$f=$_POST["feedback"];

$id=$_SESSION["email"];

$sql="INSERT INTO feedback(fcontent,fdate,email,type)values('$f',NOW(),'$id','3')";
if(mysqli_query($conn,$sql))
{
	?>
	<script type="text/javascript">
		alert("Your feedback is submited to admin");
		window.location="index.php";
	</script>
	<?php

}
?>