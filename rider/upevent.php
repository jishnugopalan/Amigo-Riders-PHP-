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

$sql5="SELECT * FROM event where event_id='$rid'";
$result=mysqli_query($conn,$sql5);
          if(mysqli_num_rows($result) > 0)
          {
               while($row=mysqli_fetch_assoc($result))

               {
                    $d=$row["name"];
               }
          }
$sql="SELECT * FROM event_reg where event_id='$rid' and email='$id'";
$result=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
//echo $rows;
if($rows > 0 )
{
?>
     	<script type="text/javascript">
     		alert("You already joined in this event");
     		window.location="event.php";
     	</script>
     	<?php
 }
 else{
$sql2="INSERT INTO event_reg(event_id,email,edate)values('$rid','$id',NOW())";
if(mysqli_query($conn,$sql2))
{
$sql1="UPDATE event SET no_of_person=no_of_person-1 where event_id='$rid'";
if(mysqli_query($conn,$sql1))
{


      $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$cemail','$cname','A new rider joined in your event',NOW(),'$rid','ejoin','$d')";
                if(mysqli_query($conn,$sql4))
                {
                  

                }
	?>
     	<script type="text/javascript">
     		alert("You Joined Successfully");
     		window.location="event.php";
     	</script>
     	<?php
 }
}
}
?>