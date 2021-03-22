
<!DOCTYPE html>
<html>
<head>
    <title>Discover Travel Category Bootstrap Responsive website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Discover Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>

     <style type="text/css">
    body{
        background-image:url(images/m4.jpg);
        color:white;
        font-size: 50px;
    }
    .myclass{
        background-color: indigo;
        color:white;
        text-align: center;
        font-size:30px;
     }
     .linkclass{
        background-color: white;
        color:red;
     }
     h1{
         font-size:x-large;
     }
     h3{
        color:yellow;
        font-size: 20px;
     }
     a:link{
      color:red;
      font-size: 20px;
      font-family: serif;
      font-weight: bold;
     }
     a.cclass{
      text-decoration: none
     }
     a:visited{
      color:red;
     }
     a:hover{
      color:black;
     }
     input[type="submit"]{
        background-color: black;
        color:white;
        font-size:30px;
     }
     input[type="file"]{
        font-size:30px;
     }
</style>
   
</head>
<body>
<div class="myclass">
    UPLOAD YOUR IMAGE

    <div class="linkclass">
                       <?php
                       session_start();
                       $type=$_SESSION["user"];
                       
                  if($type==1){
                 //echo "<a class='cclass' href='upload.php'></a> &nbsp &nbsp &nbsp";
                  echo "<a class='cclass' href='../user/index.php'>Home</a> &nbsp &nbsp &nbsp";
                  }
                   if($type==2){
                 //echo "<a class='cclass' href='upload.php'></a> &nbsp &nbsp &nbsp";
                  echo "<a class='cclass' href='../rider/index.php'>Home</a> &nbsp &nbsp &nbsp";
                  }
                   if($type==3){
                 //echo "<a class='cclass' href='upload.php'></a> &nbsp &nbsp &nbsp";
                  echo "<a class='cclass' href='../club/index.php'>Home</a> &nbsp &nbsp &nbsp";
                  }
                  
                  //echo "<a class='cclass' href='../logout.php'>Logout</a> &nbsp &nbsp &nbsp";
                  ?>
              </div>
          </div>


    <form method="post" enctype="multipart/form-data">
    Select The Image To Upload:
    <input type="file" name="file">
    <input type="submit" name="submit" value="UPLOAD">
    <h1>Recent Images</h1>

<?php
// Database configuration

$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "amigo";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
/*include 'upload.php';*/
$statusMsg = '';
$id=$_SESSION["email"];

// File upload path
if(isset($_FILES['file'])){
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into gallery (url, uploaded_on,item_type,email) VALUES ('".$fileName."', NOW(),'image','$id')");
            if($insert){

                if($type==1)
               header('location:../user/index.php');
                if($type==2)
               header('location:../rider/index.php');
                if($type==3)
               header('location:../club/index.php');


                 
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

								
								echo "<script type='text/javascript'>alert('$statusMsg\\n\\nUploads: $fileName\\nType: $fileType\\nStored in: uploads/$fileName');</script>";
								
	}	

		

?>	
	


<?php 
$query = $db->query("SELECT * FROM gallery where item_type='image' and email='$id'");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["url"]; ?>


                      
                       
                       
    <img  src="<?php echo $imageURL; ?>" alt="" width="500" height="500"/>
    
                            
                                </div>
      
                        </a>
</div>




<?php }
}else{ ?>
    <p>No image(s) found...</p>

<?php } 
?>

</form>
</body>
</html>