<?php
session_start();
include"dbconn.php";
//$id=$_SESSION["email"];
$rid=$_GET['id'];


$sql2="SELECT * FROM trip a,u_r_reg b where trip_id='$rid' and a.email=b.email";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result) > 0)
{
     while($row=mysqli_fetch_assoc($result))
     {
          $e=$row["email"];
          $d=$row["destination"];
     }
}
$sql1="DELETE FROM trip where trip_id='$rid'";
if(mysqli_query($conn,$sql1))
{
	 $sql3="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$e','Admin','deleted by admin',NOW(),'$rid','trip','$d')";
  if(mysqli_query($conn,$sql3))
  {
     
      $sql4="SELECT * FROM tripjoin a,u_r_reg b where a.trip_id='$rid' and a.email=b.email";
		$result1=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result1) > 0)
		{
			while($row1=mysqli_fetch_assoc($result1))
			{
                $email1=$row1["email"];
                $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$email1','Admin','deleted by admin',NOW(),'$rid','trip','$d')";
                if(mysqli_query($conn,$sql4))
                {
                   $sql5="DELETE FROM tripjoin where trip_id='$rid'";
                   if(mysqli_query($conn,$sql5))
                   {

                   }

                }


			}
		}


	?>
     	<script type="text/javascript">
     		alert("You deleted this trip");
     		window.location="trip.php";
     	</script>
     	<?php
   }  	
 }
?>