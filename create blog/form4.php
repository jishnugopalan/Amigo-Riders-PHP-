<?php
include "dbconn.php";
session_start();
$type=$_SESSION["user"];
if(isset($_FILES['file'])){
$target_dir="uploads/";

$a=$_POST["header"];
$b=$_POST["blog"];
$id=$_SESSION["email"];
$c=$_POST["filetype"];
//$c=$_POST["file"];
//$a=$_POST["category"];
//$b=$_POST["filetype"];
if($c=='image'){
$target_file= $target_dir . basename($_FILES["file"]["name"]);
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
 $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
 if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
$sql1="INSERT into blog (url,email,blog_header,blog_content,filetype) VALUES ('$target_file','$id','$a','$b','$c')";
if(mysqli_query($conn,$sql1))
{
               if($type==1)
               header('location:../user/index.php');
                if($type==2)
               header('location:../rider/index.php');
                if($type==3)
               header('location:../club/index.php');
}
else{
echo"<script type='text/javascript'>alert('file uploading failed')</script>";
}
}
}
}
else{
	 ?>
          <script type="text/javascript">
               alert("Sorry, only JPG, JPEG, PNG files are allowed to upload");
               window.location="index.php";
          </script>
          <?php
}
}
else{

	$target_file= $target_dir . basename($_FILES["file"]["name"]);
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
 $allowTypes = array('mp4','mkv');
    if(in_array($fileType, $allowTypes)){
 if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
$sql1="INSERT into blog (url,email,blog_header,blog_content,filetype) VALUES ('$target_file','$id','$a','$b','$c')";
if(mysqli_query($conn,$sql1))
{
               if($type==1)
               header('location:../user/blog/blog1.php');
                if($type==2)
               header('location:../rider/blog/blog1.php');
                if($type==3)
               header('location:../club/index.php');
}
else{
echo"<script type='text/javascript'>alert('file uploading failed')</script>";
}
}
}
}
else{
	 ?>
          <script type="text/javascript">
               alert("Sorry, only mp4 and amk video files are allowed to upload");
               window.location="index.php";
          </script>
          <?php
}
}

}

?>