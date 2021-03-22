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

$sql="SELECT * FROM trip where trip_id='$rid' and admin_s='y'";
$result=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
//echo $rows;
if($rows > 0 )
{
?>
     	<script type="text/javascript">
     		alert("You already approve  this trip");
     		window.location="trip.php";
     	</script>
     	<?php
 }
 else{
$sql1="UPDATE trip SET admin_s='y' where trip_id='$rid'";
if(mysqli_query($conn,$sql1))
{
     $sql3="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$e','Admin','approved by admin',NOW(),'$rid','trip','$d')";
  if(mysqli_query($conn,$sql3))
  {

     $sql4="SELECT * FROM tripjoin a,u_r_reg b where a.trip_id='$rid' and a.email=b.email";
    $result1=mysqli_query($conn,$sql4);
    if(mysqli_num_rows($result1) > 0)
    {
      while($row1=mysqli_fetch_assoc($result1))
      {
                $email1=$row1["email"];
                $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$email1','Admin','updated by admin',NOW(),'$rid','trip','$d')";
                if(mysqli_query($conn,$sql4))
                {
                   

                }


      }
    }





	?>
     	<script type="text/javascript">
     		alert("You approved this trip");
     		window.location="trip.php";
     	</script>
     	<?php
     }
 }
}
?>