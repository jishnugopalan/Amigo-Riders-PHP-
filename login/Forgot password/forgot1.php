<?php
session_start();
include "dbconn.php";
$email=$_SESSION['email'];
$a=$_POST["ans1"];
$b=$_POST["ans2"];
$c=$_POST["ans3"];

if(isset($_POST["ques1"]))
{
 $sql="SELECT * FROM login where email='$email' and qanswer1='$a'";
 $result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){

 header('location:index2.php');


}
else {
   header('location:error/index.php');
}
}

if(isset($_POST["ques2"]))
{
 $sql="SELECT * FROM login where email='$email' and qanswer2='$b'";
 $result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){

 header('location:index2.php');


}
else {
   header('location:error/index.php');
}
}

if(isset($_POST["ques3"]))
{
 $sql="SELECT * FROM login where email='$email' and qanswer3='$c'";
 $result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){

 header('location:index2.php');


}
else {
   header('location:error/index.php');
}
}








?>