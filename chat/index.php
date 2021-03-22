<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];
$sql="SELECT * FROM u_r_reg where email!='$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$name=$row["name"];
		$eid=$row["email"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
</head>
<body>
<hr>
Name:<?php echo $name ?><br>
<input type="hidden" value="<?php echo $eid ?>" name="email">
<a href="my.php?eid=<?php echo $eid ?>"><input type="button" value="chat"></a><br>
<hr>

<?php
	}
}
?>
</body>
</html>
