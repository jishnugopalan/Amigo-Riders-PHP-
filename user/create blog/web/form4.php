<?php
include "dbconn.php";


if(isset($_POST['file'])){
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$a=$_POST["category"];
$b=$_POST["filetype"];

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
  /* $allowTypes = array('jpg','png','jpeg','gif','pdf','mp4');*/
    //if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $conn->query("INSERT into media (filename,categoryid,filetype) VALUES ('".$fileName."','$a','$b')");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                 
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }

    $statusMsg = 'Please select a file to upload.';


								
								echo "<script type='text/javascript'>alert('$statusMsg\\n\\nUploads: $fileName\\nType: $fileType\\nStored in: uploads/$fileName');</script>";
								
		
}
else{
	echo "no";
}
		

?>	

