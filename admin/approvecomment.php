<?php
//session_start();
include"dbconn.php";
//$id=$_SESSION["email"];
$rid=$_GET['id'];

$sql="SELECT * FROM comment where item_id='$rid' and admin_s='1'";
$result=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
//echo $rows;
if($rows > 0 )
{
?>
     	<script type="text/javascript">
     		alert("You already approve  this comment");
     		window.location="comment.php";
     	</script>
     	<?php
 }
 else{
$sql1="UPDATE comment SET admin_s='1' where item_id='$rid'";
if(mysqli_query($conn,$sql1))
{
	?>
     	<script type="text/javascript">
     		alert("You approved this comment");
     		window.location="comment.php";
     	</script>
     	<?php
 }
}
?>