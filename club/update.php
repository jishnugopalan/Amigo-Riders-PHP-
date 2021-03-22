<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
$a=$_POST["idate"];
//$b=$_POST["gender"];
$c=$_POST["cplace"];
$d=$_POST["street"];
$e=$_POST["pin"];
//$f=$_POST["district"];
$g=$_POST["ph"];
$h=$_POST["name"];

$i=$_POST["owner"];
$j=$_POST["cid"];
// $j=$_POST["pass"];
//$k=$_POST["email"];
if(isset($_POST["submit"])){
$target_dir="../profile/uploads/";
$target_file= $target_dir . basename($_FILES["file"]["name"]);
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
 if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
     $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
    if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
$sql1="UPDATE club_reg SET photo='$target_file' where email='$id'";
if(mysqli_query($conn,$sql1))
{
	?>
     	<script type="text/javascript">
     		alert("Update Succesfully");
     		window.location="profile.php";
     	</script>
     	<?php
}
}
}
else{
     ?>
          <script type="text/javascript">
               alert("Sorry, only JPG, JPEG, PNG files are allowed to upload");
               window.location="profile.php";
          </script>
          <?php
}
}
else{

      ?>
          <script type="text/javascript">
               alert("Please select an image to upload");
               window.location="profile.php";
          </script>
          <?php
}
}

if(isset($_POST["submit1"])){
	$sql="UPDATE club_reg SET issued_date='$a' where email='$id'";
     if(mysqli_query($conn, $sql))
     {
     	//echo "updated";
     	?>
     	<script type="text/javascript">
     		alert("Update Succesfully");
     		window.location="profile.php";
     	</script>
     	<?php

     }
    
    
}
// if(isset($_POST["submit2"])){
// 	$sql="UPDATE u_r_reg SET gender='$b' where email='$id'";
//      if(mysqli_query($conn, $sql))
//      {
//      	//echo "updated";
//      	?>
//      	<script type="text/javascript">
//      		alert("Update Succesfully");
//      		window.location="profile.php";
//      	</script>
//      	<?php

//      }
    
    
// }
if(isset($_POST["submit3"])){
	$sql="UPDATE club_reg SET current_place='$c' where email='$id'";
     if(mysqli_query($conn, $sql))
     {
     	//echo "updated";
     	?>
     	<script type="text/javascript">
     		alert("Update Succesfully");
     		window.location="profile.php";
     	</script>
     	<?php

     }
    
    
}
if(isset($_POST["submit4"])){
	$sql="UPDATE club_reg SET street='$d' where email='$id'";
     if(mysqli_query($conn, $sql))
     {
     	
     	?>
     	<script type="text/javascript">
     		alert("Update Succesfully");
     		window.location="profile.php";
     	</script>
     	<?php

     	
     }
    
    
}
if(isset($_POST["submit5"])){
	$sql="UPDATE club_reg SET pincode='$e' where email='$id'";
     if(mysqli_query($conn, $sql))
     {
     	
     	?>
     	<script type="text/javascript">
     		alert("Update Succesfully");
     		window.location="profile.php";
     	</script>
     	<?php

     	
     }
    
    
}

    
    

if(isset($_POST["submit7"])){
     
	$sql="UPDATE club_reg SET phone='$g' where email='$id'";
     if(mysqli_query($conn, $sql))
     {
     	
     	?>
     	<script type="text/javascript">
     		alert("Update Succesfully");
     		window.location="profile.php";
     	</script>
     	<?php


     	
     }
     
    
    
}
if(isset($_POST["submit8"])){
	$sql="UPDATE club_reg SET clubname='$h' where email='$id'";
     if(mysqli_query($conn, $sql))
     {
     	
     	?>
     	<script type="text/javascript">
     		alert("Update Succesfully");
     		window.location="profile.php";
     	</script>
     	<?php

     	
     }
    
    
}

if(isset($_POST["submit9"])){
     $sql="UPDATE club_reg SET ownership='$i' where email='$id'";
     if(mysqli_query($conn, $sql))
     {
          
          ?>
          <script type="text/javascript">
               alert("Update Succesfully");
               window.location="profile.php";
          </script>
          <?php

          
     }
    
    
}

if(isset($_POST["submit10"])){
     $sql="UPDATE club_reg SET club_reg_id='$j' where email='$id'";
     if(mysqli_query($conn, $sql))
     {
          
          ?>
          <script type="text/javascript">
               alert("Update Succesfully");
               window.location="profile.php";
          </script>
          <?php

          
     }
    
    
}
// if(isset($_POST["submit9"])){
// 	$sql="UPDATE login SET password='$j' where email='$id'";
//      if(mysqli_query($conn, $sql))
//      {
     	
//      	?>
//      	<script type="text/javascript">
//      		alert("Update Succesfully");
//      		window.location="profile.php";
//      	</script>
//      	<?php

     	
//      }
    
    


    
    

?>
