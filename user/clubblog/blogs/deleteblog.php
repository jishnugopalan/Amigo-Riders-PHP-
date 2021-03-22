<?php
include"dbconn.php";
$bid=$_GET["bid"];
$sql="DELETE  FROM blog  where blog_id='$bid'";
if(mysqli_query($conn,$sql))
{
	$sql2="DELETE FROM likes where item_id='$bid'";
	if(mysqli_query($conn,$sql2))
	{
	$sql3="DELETE FROM comment where sell_id='$bid'";	
	if(mysqli_query($conn,$sql3))
	{
	?>
	<script type="text/javascript">
		alert("the blog deleted");
		window.location="blogupdate.php";
	</script>
	<?php
}
}
}
else
echo mysqli_error($conn);
?>