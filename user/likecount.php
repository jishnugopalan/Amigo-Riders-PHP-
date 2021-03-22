<?php

session_start();
$bid = $_POST['bid'];
//echo $bid;
//echo $email;
include_once('dbconn.php');

$sql="SELECT COUNT(*) FROM likes where item_id='$bid'";
$result=(mysqli_query($conn,$sql));
//echo mysql_error();
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
     $lno=$row["COUNT(*)"];

	}
  echo $lno;
}
else{
	$lno='0';
	echo $lno;
}

?>