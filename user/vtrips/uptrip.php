<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
$rid=$_GET['id'];
$cemail=$_GET['email'];

$sql3="SELECT * FROM u_r_reg where email='$id'";
$result=mysqli_query($conn,$sql3);
          if(mysqli_num_rows($result) > 0)
          {
               while($row=mysqli_fetch_assoc($result))

               {
                    $cname=$row["name"];
               }
          }

$sql5="SELECT * FROM trip where trip_id='$rid'";
$result=mysqli_query($conn,$sql5);
          if(mysqli_num_rows($result) > 0)
          {
               while($row=mysqli_fetch_assoc($result))

               {
                    $d=$row["destination"];
               }
          }

$sql="SELECT * FROM tripjoin where trip_id='$rid' and email='$id'";
$result=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
//echo $rows;
if($rows > 0 )
{
?>
     	<script type="text/javascript">
     		alert("You already joined in this trip");
     		window.location="trip.php";
     	</script>
     	<?php
 }
 else{
$sql2="INSERT INTO tripjoin(trip_id,email,tdate)values('$rid','$id',NOW())";
if(mysqli_query($conn,$sql2))
{
$sql1="UPDATE trip SET no_of_person=no_of_person-1 where trip_id='$rid'";
if(mysqli_query($conn,$sql1))
{

     $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$cemail','$cname','A new user joined in your trip to',NOW(),'$rid','tjoin','$d')";
                if(mysqli_query($conn,$sql4))
                {
                  

                }
	?>
     	<script type="text/javascript">
     		alert("You Joined Successfully");
     		window.location="trip.php";
     	</script>
     	<?php
 }
}
}
?>