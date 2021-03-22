<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
$sql3="SELECT * FROM u_r_reg where email='$id'";
$result=mysqli_query($conn,$sql3);
          if(mysqli_num_rows($result) > 0)
          {
               while($row=mysqli_fetch_assoc($result))

               {
                    $cname=$row["name"];
               }
          }



$a=$_POST["tid"];

//$j=$_POST["pass"];

$sql2="SELECT * FROM trip a,u_r_reg b where trip_id='$a' and a.email=b.email";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result) > 0)
{
     while($row=mysqli_fetch_assoc($result))
     {
          $e=$row["email"];
          $d=$row["destination"];
     }
}
if(isset($_POST["update"]))
{
  $b=$_POST["dest"];
$c=$_POST["splace"];
$d=$_POST["sdate"];
$e=$_POST["edate"];
//$f=$_POST["district"];
$g=$_POST["no"];
$h=$_POST["description"];
//echo $e,$d;
$sql="UPDATE trip set destination='$b',starting_place='$c',starting_date='$d',ending_date='$e',description='$h',no_of_person='$g',admin_s='n' where trip_id='$a' and email='$id'";
if(mysqli_query($conn,$sql))
{
$sql4="SELECT * FROM tripjoin a,u_r_reg b where a.trip_id='$a' and a.email=b.email";
          $result1=mysqli_query($conn,$sql4);
          if(mysqli_num_rows($result1) > 0)
          {
               while($row1=mysqli_fetch_assoc($result1))
               {
                $email1=$row1["email"];
                $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$email1','$cname','sent to admin for the approval.The trip will be displayed after this approval.So please cooperate with as',NOW(),'$a','trip','$b')";
                if(mysqli_query($conn,$sql4))
                {
                  

                }


               }
          }



//echo "updated";
	?>
     	<script type="text/javascript">
     		alert("Update Succesfully. You need to wait for admin approval");
     		window.location="tripedit.php";
     	</script>
     	<?php
}
}
else if(isset($_POST["delete"]))
{
	$sql="DELETE FROM trip where trip_id='$a'";
	//$result=mysqli_query($conn,$sql);
	//echo $result;
	if(mysqli_query($conn,$sql))
{


     $sql4="SELECT * FROM tripjoin a,u_r_reg b where a.trip_id='$a' and a.email=b.email";
          $result1=mysqli_query($conn,$sql4);
          if(mysqli_num_rows($result1) > 0)
          {
               while($row1=mysqli_fetch_assoc($result1))
               {
                $email1=$row1["email"];
                $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$email1','$cname','deleted.',NOW(),'$a','trip','$d')";
                if(mysqli_query($conn,$sql4))
                {
                  

                }


               }
          }

	$sql1="DELETE FROM tripjoin where trip_id='$a'";
	if(mysqli_query($conn,$sql)){
	?>
     	<script type="text/javascript">
     		alert("Your Trip Deleted Succesfully");
     		window.location="tripedit.php";
     	</script>
     	<?php
     }
}
else
echo mysqli_error($conn);

}
?>