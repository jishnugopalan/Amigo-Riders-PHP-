<?php
session_start();
if(isset($_POST["bphoto"]))
{
     $id=$_SESSION["email"];
        $sid=$_POST["sid"];
$target_dir_rcbook = "Bike Selling Form/uploads/";
        $target_file_rcbook = $target_dir_rcbook . basename($_FILES["bike"]["name"]);
        $imageFileType_rcbook = strtolower(pathinfo($target_file_rcbook,PATHINFO_EXTENSION));
  if (move_uploaded_file($_FILES["bike"]["tmp_name"], $target_file_rcbook)){

    $sql="UPDATE selling SET bphoto='$target_file_rcbook' where selling_id='$sid' and email='$id'";
     if(mysqli_query($conn,$sql)){
                
              header("Location:index.php");
         
                    
                }
                else{

                    echo "ERROR".mysqli_error($conn);
                }


  }
