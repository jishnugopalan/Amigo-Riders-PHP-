<?php
session_start();
include"dbconn.php";
//$id=$_SESSION["email"];
$rid=$_GET['id'];

$sql2="SELECT * FROM event a,club_reg b where event_id='$rid' and a.email=b.email";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result) > 0)
{
     while($row=mysqli_fetch_assoc($result))
     {
          $e=$row["email"];
          $d=$row["name"];
     }
}

$sql1="DELETE FROM event where event_id='$rid'";
if(mysqli_query($conn,$sql1))
{

	$sql3="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$e','Admin','deleted by admin',NOW(),'$rid','event','$d')";
	if(mysqli_query($conn,$sql3))
	{
		$sql4="SELECT * FROM event_reg a,u_r_reg b where a.event_id='$rid' and a.email=b.email";
		$result1=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result1) > 0)
		{
			while($row1=mysqli_fetch_assoc($result1))
			{
                $email1=$row1["email"];
                $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$email1','Admin','deleted by admin',NOW(),'$rid','event','$d')";
                if(mysqli_query($conn,$sql4))
                {
                   $sql5="DELETE FROM event_reg where event_id='$rid'";
                   if(mysqli_query($conn,$sql5))
                   {

                   }

                }


			}
		}
        
                   	
                  


	?>
     	<script type="text/javascript">
     		alert("You deleted this event");
     		window.location="event.php";
     	</script>
     	<?php
     	
     }
 }
?>