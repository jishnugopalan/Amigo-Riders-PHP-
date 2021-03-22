<?php
include"dbconn.php";
session_start();
$name=$_POST["fid"];
$id=$_SESSION["email"];
//echo $name;

$sql="SELECT * FROM u_r_reg where name like '%$name%' and email!='$id'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$name=$row["name"];
		$eid=$row["email"];
		$imageURL = '../../profile/'.$row["photo"];
		?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	img.p{

 border-radius: 100%; 
 font-size: large;
}
body{
	
}
.read{
   padding-left:30px;
  padding-top:5px;
  /*background-color: skyblue;*/
}
a.txt{
  text-decoration: none;
}
</style>
	<title></title>
</head>
<body>
	<div class="read">
		<a class="txt" href="my.php?eid=<?php echo $eid ?>">
<font color="black"><img class="p"  src="<?php echo  $imageURL; ?>" alt="" width="100" height="100"/>
	<b><?php echo $name ?></b></font>
<input type="hidden" value="<?php echo $eid ?>" name="email">
</a><br>
<hr>

</div>
<?php
	}
}
else
echo "Search not found";
?>

</body>
</html>