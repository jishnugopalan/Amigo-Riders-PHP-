<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];
$tid=$_GET["id"];
$cemail=$_GET['cemail'];
$sql3="SELECT * FROM u_r_reg where email='$id'";
$result=mysqli_query($conn,$sql3);
          if(mysqli_num_rows($result) > 0)
          {
               while($row=mysqli_fetch_assoc($result))

               {
                    $cname=$row["name"];
               }
          }

          $sql5="SELECT * FROM event where event_id='$tid'";
$result=mysqli_query($conn,$sql5);
          if(mysqli_num_rows($result) > 0)
          {
               while($row=mysqli_fetch_assoc($result))

               {
                    $d=$row["name"];
               }
          }
$sql="DELETE FROM event_reg where event_id='$tid' and email='$id'";
if(mysqli_query($conn,$sql))
{
$sql1="UPDATE event SET no_of_person=no_of_person + 1 where event_id='$tid'";
if(mysqli_query($conn,$sql1))
{

$sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$cemail','$cname','Disjoined from your event',NOW(),'$tid','djoin','$d')";
                if(mysqli_query($conn,$sql4))
                {
                  

                }

	?>
     	<script type="text/javascript">
     		alert("You deleted this trips");
     		window.location="myevent.php";
     	</script>
     	<?php
     }
 }