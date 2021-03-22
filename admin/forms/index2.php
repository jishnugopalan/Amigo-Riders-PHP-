<?php
include "dbconn.php";
$a=$_POST["country"];
$b=$_POST["state"];

$sql2 = "INSERT INTO state(s_name,country_id) values ('$b','$a')";
if (mysqli_query($conn, $sql2)) {
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