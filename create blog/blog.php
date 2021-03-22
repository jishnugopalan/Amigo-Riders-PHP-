<?php
include "dbconn.php";
session_start();
$a=$_POST["header"];
$b=$_POST["blog"];
$id=$_SESSION["email"];
$c=$_POST["file"];




$sql = "INSERT INTO blog(email,blog_header,blog_content,url) VALUES ('$id','$a','$b','$c')";
if (mysqli_query($conn, $sql)) {

  ?>
  <script type="text/javascript">
  	alert('Blog created successfully');
  	window.location="../index.php"
  	
  </script>

  <?php

    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>