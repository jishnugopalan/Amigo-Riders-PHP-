<?php
$cid=$_GET["cid"];
include"dbconn.php";

$sql="DELETE FROM comment where item_id='$cid'";
if(mysqli_query($conn,$sql))
{
	?>
	<script type="text/javascript">
		alert("the comment deleted");
		window.location="blogupdate.php";
	</script>
	<?php
}
?>