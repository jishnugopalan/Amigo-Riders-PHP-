<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];
//$msg=$_POST["msg"];
$fid=$_POST["fid"];

$sql="UPDATE chat_messages set cstatus='1' where femail='$id' and email='$fid'";
if(mysqli_query($conn,$sql))
{

}


$sql3="SELECT * FROM chat_messages a,u_r_reg b WHERE a.email='$id' and a.femail='$fid' and b.email=a.email or a.email='$fid' and a.femail='$id' and b.email=a.email order by msg_id ASC";
$result=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$message=$row["msg"];
		//$sname=$row["sender_name"];
		//$rname=$row["reciever_name"];
		$email=$row["email"];
		$femail=$row["femail"];
		$imageURL = '../../profile/'.$row["photo"];
		$cstatus=$row["cstatus"];
		$mdate=$row["mdate"];
		//$eid=$row["email"];

$sql4="SELECT name FROM u_r_reg where email='$email'";
$row4=mysqli_fetch_assoc(mysqli_query($conn,$sql4));
{
 $sname=$row4["name"];
}
$sql5="SELECT name FROM u_r_reg where email='$femail'";
$row5=mysqli_fetch_assoc(mysqli_query($conn,$sql5));
{
 $rname=$row5["name"];
}


		
	if($email=='$id')
	{
     
	
		
		$me=$rname;
	}
	    else
	    {
	    	 if($cstatus=='1' and $email!=$fid)
      	$seen='(seen)';
      else
      	$seen='';
	    $me=$sname;
	}
	echo "<h4>";
	?>
	<html>
	<head>
		<style type="text/css">
			img.p{

 border-radius: 100%; 
 font-size: large;
}
.container {
  border: 2px solid #000000;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

/* Darker chat container */
.darker {
  border-color: #ccc;
  background-color: #ddd;
}

/* Clear floats */
.container::after {
  content: "";
  clear: both;
  display: table;
}

/* Style images */
.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

/* Style the right image */
.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

/* Style time text */
.time-right {
  float: right;
  color: #aaa;
}

/* Style time text */
.time-left {
  float: left;
  color: #999;
}
		</style>
	</head>
	<body>
		<div class="container">
	
<?php
if($me==$sname)
{
	?>
	<img src="<?php echo  $imageURL; ?>" alt="" style="width:100%;">
<?php
	//echo $me;
	//echo":";
 echo "<p>",$message,"</p>";
 
 ?>
 <span class="time-right"><?php echo $mdate ?></span>
 <font color="blue" size="1px"><?php echo $seen ?></font>


 <?php

 
 
 ?>
 </div>
 <?php
}

else
{
?>
<div class="container darker">
	<img class="right" src="<?php echo  $imageURL; ?>" alt="" class="right" style="width:100%;">
	<?php

	//echo $me;
	//echo":";
 echo "<p>",$message,"<p>";
 //echo $seen;
 
}
?>
</div>
<?php

	}

}

?>
</body>
</html>