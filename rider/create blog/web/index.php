<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>Simple Tab Forms A Flat Responsive Widget Template  :: w3layouts</title>
	<link href="css/style.css" rel='stylesheet' type='text/css'/>
		<link href="//fonts.googleapis.com/css?family=Ropa+Sans:400,400i&amp;subset=latin-ext" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Simple Tab Forms Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script src="js/jquery.min.js"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion           
							width: 'auto', //auto or any width like 600px
							fit: true   // 100% fit in a container
						});
					});
				</script>
				<style type="text/css">
					body{
						color:white;
					}
				</style>
</head>
<body>
	<h1>MEDIA</h1>
	<div class="main-content">
		
        <div class="right-w3">
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign up</span></li>
						<!--li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Sign in</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Subscribe</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Contact</span></li-->
				    <div class="clear"></div>
					</ul>	
					<div class="agile-tb">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<form  method="post" action="" enctype="multipart/form-data">	
								<?php
								include "dbconn.php";
								$sql="SELECT * FROM category";
								$result=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result) > 0){
                                	//while($row=mysqli_fetch_array($result)){
                                	echo "Please select a category <br>";
                                	echo "<select name='category'>";
                                	foreach ($conn->query($sql) as $row) {
                                		# code...
                                	


                               
                               echo "<option value='" . $row['categoryid'] . "'>" . $row['categoryname'] . "</option>";
                                	}
                                	echo "</select>";
                                }
                                else{
                                	echo "No category";
                                }
								?>
							
										<br><br><br>		
							<input type="radio" name="filetype" value="image" checked="">Image
											<input type="radio" name="filetype" value="video">Video
										    </select><br><br><br>
								<input  type="file" name="file" id ="file" required="">	<br>					
								
								<span class="checkbox1">
									<!--label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I Agree To All Terms And Conditions</label-->
								</span>

								<input type="submit" name ="submit" value="Submit"/>
							</form>
						</div>	
						<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
							<form action="#" method="post">						
								<input placeholder="Email Address" name="email" class="mail" type="text" required="">
								<input placeholder="Password" name="password" class="lock" type="password" required="">		
								<span class="checkbox1">
									<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
								</span>
								
								<input type="submit" value="Submit"/>
							</form>
						 </div>
						 <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2">
							<form action="#" method="post">						
								<input placeholder="Email Address" name="email" class="mail" type="text" required="">
								<input type="submit" value="Subscribe"/>
							</form>
						 </div>
						 <div class="tab-4 resp-tab-content" aria-labelledby="tab_item-3">
							<form action="#" method="post">	
								<input placeholder="Name" name="name" type="text" required="">							
								<input placeholder="Email Address" name="email" class="mail" type="text" required="">
								<textarea  name="Message" placeholder="Message..." required=""></textarea>
								<input type="submit" value="Send"/>
							</form>
						 </div>
					 </div>
				</div> 
			</div> 			        					            	      
		</div>	
	</div>
	
	<div class="footer">
		<!--p> &copy; 2017 Simple Tab Forms. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p-->
	</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	
	<?php


include "dbconn.php";
if(isset($_FILES['file'])){
$target_dir="uploads/";
$a=$_POST["category"];
$b=$_POST["filetype"];
$target_file= $target_dir . basename($_FILES["file"]["name"]);
 if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
 	if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
$sql1="INSERT into media (filename,categoryid,filetype) VALUES ('$target_file','$a','$b')";
if(mysqli_query($conn,$sql1))
{
	echo"<script type='text/javascript'>alert('file uploaded successfully')</script>";
}
else{
echo"<script type='text/javascript'>alert('file uploading failed')</script>";
}
}
}
}
?>
	
</body>
</html>