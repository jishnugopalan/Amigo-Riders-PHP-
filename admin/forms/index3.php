<?php
include "dbconn.php";
$b=$_POST["state"];
$c=$_POST["dis"];
$sql4= "INSERT INTO district(d_name,state_id) values ('$c','$b')";
if (mysqli_query($conn, $sql4)) {
   ?>
     	<script type="text/javascript">
     		alert("added successfully");
     		window.location="index1.php";
     	</script>
     	<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>