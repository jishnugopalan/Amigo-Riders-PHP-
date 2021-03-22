<?php
include "dbconn.php";
$a=$_POST["con"];

$sql = "INSERT INTO country(c_name) values ('$a')";
if (mysqli_query($conn, $sql)) {
  ?>
     	<script type="text/javascript">
     		alert(" added successfully");
     		window.location="index1.php";
     	</script>
     	<?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
