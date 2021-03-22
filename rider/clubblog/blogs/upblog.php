<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
$bid=$_POST["bid"];
$header=$_POST["header"];
$blog=$_POST["blog"];
	echo "<script type='text/javascript'>alert('$bid\\n $header $blog');</script>";
$sql="UPDATE blog set blog_header='$header' and blog_content='$blog' where blog_id='$bid' and email='$id'";
if(mysqli_query($conn,$sql))
{
	?>
	<script type="text/javascript">
		alert("Blog updated successfully");
		window.location="blogupdate.php";
	</script>
	<?php
}
else
echo mysqli_error($conn);
?>