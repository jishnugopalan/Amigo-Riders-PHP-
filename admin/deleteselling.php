<?php
session_start();
include"dbconn.php";
//$id=$_SESSION["email"];
$rid=$_GET['id'];

$sql2="SELECT * FROM selling a,u_r_reg b where selling_id='$rid' and a.email=b.email";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result) > 0)
{
     while($row=mysqli_fetch_assoc($result))
     {
          $e=$row["email"];
          $d=$row["bike_name"];
     }
}

$sql1="DELETE FROM selling where selling_id='$rid'";
if(mysqli_query($conn,$sql1))
{
	 $sql3="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$e','Admin','deleted by admin',NOW(),'$rid','selling','$d')";
  if(mysqli_query($conn,$sql3))
  {
	?>
     	<script type="text/javascript">
     		alert("You deleted this selling");
     		window.location="bikes.php";
     	</script>
     	<?php
   }
 }
?>