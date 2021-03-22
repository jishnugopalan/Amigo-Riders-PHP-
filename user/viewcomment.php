<?php
include"dbconn.php";
$sid=$_POST["sid"];
$sql2="SELECT * FROM comment where sell_id='$sid'";
	$result=mysqli_query($conn,$sql2);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$com=$row["content"];
			echo $com;
			echo $sid;
			echo "<br>";
		}
    }

    ?>		