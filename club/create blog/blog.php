<?php
include "dbconn.php";
session_start();
$a=$_POST["header"];
$b=$_POST["blog"];
$id=$_SESSION["email"];


$sql = "INSERT INTO blog(email,blog_header,blog_content) VALUES ('$id','$a','$b')";
if (mysqli_query($conn, $sql)) {

   header('location:../index.php');
      echo "<script type='text/javascript'>alert('blog uploaded successfully');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>