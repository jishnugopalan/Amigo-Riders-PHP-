<?php
include "dbconn.php";
session_start();
$id=$_SESSION["email"];
$sql3="SELECT * FROM club_reg where email='$id'";
$result=mysqli_query($conn,$sql3);
		if(mysqli_num_rows($result) > 0)
		{
			while($row=mysqli_fetch_assoc($result))

			{
				$cname=$row["clubname"];
			}
		}

$a=$_POST["name"];
$b=$_POST["place"];
$c=$_POST["day"];
$d=$_POST["Time"];
$g=$_POST["nop"];
//$h=$_POST["etype"];
$i=$_POST["epf"];
$j=$_POST["ewp"];
$k=$_POST["des"];
//$l=$_POST["status"];
$id=$_SESSION["email"];
$eid=$_POST["eventid"];


$sql2="SELECT * FROM event a,club_reg b where event_id='$eid' and a.email=b.email";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result) > 0)
{
     while($row=mysqli_fetch_assoc($result))
     {
          $e=$row["email"];
          $o=$row["name"];
     }
}
echo mysqli_error($conn);
if(isset($_POST["update"])){
 $sql="UPDATE event SET name='$a',place='$b',edate='$c',etime='$d',no_of_person='$g',booking_fee='$i',event_price='$j',description='$k',admin_s='n' where event_id='$eid'";


if(mysqli_query($conn,$sql))
{
    
      $sql4="SELECT * FROM event_reg a,u_r_reg b where a.event_id='$eid' and a.email=b.email";
		$result1=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result1) > 0)
		{
			while($row1=mysqli_fetch_assoc($result1))
			{
                $email1=$row1["email"];
                $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$email1','$cname','sent to admin for the approval.The event will be displayed after this approval.So please cooperate with as',NOW(),'$eid','event','$o')";
                if(mysqli_query($conn,$sql4))
                {
                  

                }


			}
		}
        
       echo mysqli_error($conn);            

	?>
     	<script type="text/javascript">
     		alert("Update Succesfully. You need to wait for admin approval");
     		window.location="myevent.php";
     	</script>
     	<?php
}
}

else if(isset($_POST["delete"]))
{
	$sql="DELETE FROM event where event_id='$eid'";
	//$result=mysqli_query($conn,$sql);
	//echo $result;
	if(mysqli_query($conn,$sql))
	{


		$sql4="SELECT * FROM event_reg a,u_r_reg b where a.event_id='$eid' and a.email=b.email";
		$result1=mysqli_query($conn,$sql4);
		if(mysqli_num_rows($result1) > 0)
		{
			while($row1=mysqli_fetch_assoc($result1))
			{
                $email1=$row1["email"];
                $sql4="INSERT INTO notification(email,header,body,ndate,type,item_id,ntype,nname)values('$email1','$cname','deleted',NOW(),'2','$eid','event','$d')";
                if(mysqli_query($conn,$sql4))
                {
                  

                }


			}
		}
		$sql1="DELETE FROM event_reg where event_id='$eid'";
		if(mysqli_query($conn,$sql1)){
			?>
     	<script type="text/javascript">
     		alert("You deleted this event");
     		window.location="myevent.php";
     	</script>
     	<?php
		}
	}
}
?>