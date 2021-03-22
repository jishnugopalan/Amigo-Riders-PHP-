<?php
session_start();
include "dbconn.php";
$email=$_SESSION['email'];
$a=$_POST["password"];


 $sql="UPDATE login  SET password='$a' where email='$email'";
 $result=mysqli_query($conn, $sql);
{
?>
<script type="text/javascript">
	alert("Passwor updated successfully.Please login with the new password");
 window.location="../../login/index.php";
	//echo "updated";
	</script>
<?php
}
?>