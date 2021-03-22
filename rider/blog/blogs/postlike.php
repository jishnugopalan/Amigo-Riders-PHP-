<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
$rid=$_GET['id'];

$sql="SELECT * FROM likes where item_id='$rid' and email='$id'";
$result=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
//echo $rows;
if($rows > 0 )
{
	?>
     	<script type="text/javascript">
     		//alert("You already joined in this trip");
     		window.location="post.php";
     	</script>
     	<?php
}
else{
	$sql1="INSERT INTO likes(item_id,item_name,like_count,email,ldatetime)values('$rid','blog','1','$id',NOW())";
	if(mysqli_query($conn,$sql1))
{

?>
     	<script type="text/javascript">
     		//alert("You already joined in this trip");
     		window.location="post.php";
     	</script>
     	<?php

}


}
?>