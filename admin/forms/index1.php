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
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
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
</head>
<body>
	<h1></h1>
	<a href="../index.php"><font color="white">Home</a>
	<div class="main-content">
		
        <div class="right-w3">
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Country</span></li>
						
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>State</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>District</span></li>

						
						<!--li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Contact</span></li-->
				    <div class="clear"></div>
					</ul>	
					<div class="agile-tb">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<form action="index.php" method="post">				
								<input placeholder="Country" name="con" type="text" required="">
													
									
								
								<input type="submit" value="Submit"/>
							</form>
						</div>	
						<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
							<form action="index2.php" method="post">
							<?php
								include "dbconn.php";
								$sql2="SELECT * FROM country";
								$result=mysqli_query($conn,$sql2);
                                if(mysqli_num_rows($result) > 0){
                                //echo "<option value disabled selected>Select Country </option>";	
                                	   
                                echo "<select name='country' class='form-control'>";
                                 echo "<option value disabled selected>Select State </option>" ;
                                	foreach ($conn->query($sql2) as $row) {
                                		


                               echo "<option value='" . $row['country_id'] . "' selected>" . $row['c_name'] . "</option>";

                                	}
                                	echo "</select>";
                                }
                                else{
                                	echo "No category";
                                }
                                ?>	
                                <br><br>					
								<input placeholder="State"name="state" type="text" required="">	
								
								<input type="submit" value="Submit"/>
							</form>
						 </div>
						 <div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2">
							<form action="index3.php" method="post">
							<?php
							$sql="SELECT * FROM state";
								$result=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result) > 0){
                                echo "<select name='state' class='form-control'>";
                                echo "<option value disabled selected>Select State </option>" ;
                                	foreach ($conn->query($sql) as $row) {
                                       

                               echo "<option value='" . $row['state_id'] . "' selected>" . $row['s_name'] . "</option>";
                                	}
                                	echo "</select>";
                                }
                                else{
                                	echo "No category";
                                }
                                ?>	
                                <br><br>					
								<input placeholder="District" name="dis" type="text" required="">
								<input type="submit" value="Submit"/>
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
		<p> &copy; 2017 Simple Tab Forms. All Rights Reserved | Design by <a href="http://w3layouts.com">amigoriders</a></p>
	</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
</body>
</html>