<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Upload Video</title>
        <!--link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen"-->
		<?php require ('dbconn.php'); ?>


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
       
        font-size:30px;
     }
     input[type="file"]{
        font-size:30px;
     }
</style>
   
	</head>
		<!--script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.js" type="text/javascript"></script-->

<body>

     <div class="myclass">
    UPLOAD YOUR VIDEO

    <div class="linkclass">
                       <?php
                       

                 //echo "<a class='cclass' href='upload.php'></a> &nbsp &nbsp &nbsp";
                  echo "<a class='cclass' href='../index.php'>Home</a> &nbsp &nbsp &nbsp";
                  
                  //echo "<a class='cclass' href='../logout.php'>Logout</a> &nbsp &nbsp &nbsp";
                  ?>
              </div>
          </div>

		
				<form method="post" enctype="multipart/form-data" >
					 Select a Video : 
					<input name="UPLOAD_MAX_FILESIZE" value="20971520"  type="hidden"/>
					<input type="file" name="file" id="file" />
					
					<input type="submit" value="UPLOAD" />
			</form>
			</div>
		</div>
	</div>

						<?php
						session_start();
						$id=$_SESSION["email"];
							if(isset($_FILES['file'])){
							
								$name = $_FILES['file']['name'];
								$extension = explode('.', $name);
								$extension = end($extension);
								$type = $_FILES['file']['type'];
								$size = $_FILES['file']['size'] /1024/1024;
								$random_name = rand();
								$tmp = $_FILES['file']['tmp_name'];
								
								
								
								if ((strtolower($type) != "video/mpg") && (strtolower($type) != "video/wma") && (strtolower($type) != "video/mov") 
								&& (strtolower($type) != "video/flv") && (strtolower($type) != "video/mp4") && (strtolower($type) != "video/avi") 
								&& (strtolower($type) != "video/qt") && (strtolower($type) != "video/wmv") && (strtolower($type) != "video/wmv"))
								{
									$message= "Video Format Not Supported !";

								}else
								{
									move_uploaded_file($tmp, 'upload/'.$random_name.'.'.$extension);	
									$conn->query("insert into gallery (url,item_type,uploaded_on,email) values ('$random_name.$extension','video',NOW(),'$id')");
									 header('location:../index.php');
								}
								
								?>
								<?php
								echo "<script type='text/javascript'>alert('$message\\n\\nUpload: $name\\nSize: $size\\nType: $type\\nStored in: uploads/$name');</script>";
								?>
								
								<?php
							}
					
						?>
	
				
		
			
	       <!-- List of Videos -->
				<h4>List of Videos:</h4>
		 
		   
					
							<?php
								$query = $conn->query("SELECT * FROM gallery where item_type='video' and email='$id'");
								while($row = $query->fetch()){
								$video_id = $row['item_id'];
							?>
							
							<video controls  width="400" height="500">
        
				<source src="upload/<?php echo $row['url']; ?>" type='video/mp4'>
				</video>
								
							<?php
							} 
							?>
					
          
       
    



</body>
</html>


