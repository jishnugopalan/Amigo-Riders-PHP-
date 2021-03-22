<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php

include "dbconn.php";
$query ="SELECT * FROM country";
$results = mysqli_query($conn,$query);
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<script>
function getState(val) {
	$.ajax({
	type: "POST",
	url: "getState.php",
	data:'country_id='+val,
	success: function(data){
		$("#state-list").html(data);
		getCity();
	}
	});
}


function getCity(val) {
	$.ajax({
	type: "POST",
	url: "getCity.php",
	data:'state_id='+val,
	success: function(data){
		$("#city-list").html(data);
	}
	});
}

function getEmail(emailid){

			email  = new XMLHttpRequest();
			email.open('GET' , 'test2.php?email='+emailid, true);
			email.send();
			email.onreadystatechange = function(){
				if (email.readyState == 4 && email.status == 200)
				{
					
					document.getElementById('emailDiv').innerHTML = email.responseText;
					}
				
				}
	
	
	}

	function password (pass){
	var a =	document.getElementById('pass1').value;
	//	document.write(a);
		var b = document.getElementById('pass2').value;
		if (a == b ){
			document.getElementById('cnfrmpass').innerHTML = "<font color='#00CC00'>Matched</font>";
			}
			else {
				
				document.getElementById('cnfrmpass').innerHTML = "<font color='red'>Miss matched</font>";
				}
		}

</script>
	<script typ="text/javascript" src="js/innerHTMLValidation.js" ></script>
	<title>Full Screen Enroll Form Responsive Widget Template :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Full Screen Enroll Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	
	<!-- Meta tag Keywords -->

	<!-- css files -->
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
	<!-- //web-fonts -->
	<style>
		 a:link{
	   	color:black;
	   	font-size: 30px;
	   	font-family: serif;
	   	font-weight: bold;
	   }
	   a:visited{
	   	color:black;
	   }
	   a:hover{
	   	color:white;
	   }
	    a.cclass{
      text-decoration: none
      
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
     	font-size: 25px;
     }
     h3{
     	color: yellow;
     	font-size: 20px;
     }

	</style>
</head>

<body>
	<!-- <div class="myclass">
	AMIGO RIDERS<br><h3>
	Explore your dreams</h3><br> -->
	<!-- <div class="linkclass">User Signup Form</div> -->
</div>
	<div class="main-w3ls">
		<div class="left-content">
			<div class="w3ls-content">
				<!-- logo --
				<h1>
					<a href="index.html"><span class="fa fa-magic"></span></a>
				</h1>
				<!-- //logo -->
				<center><font size="20px"><b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp USER SIGN UP FORM</b></font><br>
					<a class="cclass" href="../../guest/index.html">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <b>Home</b></a></center>
				<h2></h2><br><br>
				
				<ul ><!--class="nav-w3ls"-->
					<li>
						
					</li><br>
					<li>
						<!-- <a class="cclass" href="../../guest/about.html"><b>About Us</b></a> -->

					</li>

					
				</ul>
				
			</div>
			<!-- copyright -->
			<div class="copyright">
				
					<a href="http://w3layouts.com"></a>
				</p>
			</div>
			<!-- //copyright -->
		</div>
		<div class="right-form-agile">
			<!-- content -->
			<div class="sub-main-w3">
				<h3>Sign up here</h3>
				<br>
				<form action="user.php" method="post" name="form1">
					<div class="form-style-agile">

						<label>Your Name </label><i style="color:red;" id="pointfn"></i>

						<div class="pom-agile">
							<span class="fa fa-user"></span>

							<input placeholder="Your name" name="Name" type="text" required="" autocomplete="off" id="firstname" >

							
						</div>
						
					</div>
					<div class="form-style-agile">
						<label>Date of Birth</label><i style="color:red;" id="dob"></i>
						
					
						<div class="pom-agile">
							  <div class="container">
  
<input type="date" name="dob" placeholder="" required="" max="<?php echo date("Y")-18; ?>-12-31">
</div>

						</div>
					</div>
					<div class="form-style-agile">
						<label>Gender</label>
						<div class="pom-agile">
							<!--span class="fa fa-user"></span-->
							<input type="radio" name="gender" value="male" checked>Male<input type="radio" name="gender" value="female">Female<input type="radio" name="gender" value="other">Other
						</div>
					</div>
					<div class="form-style-agile">
						<label>Address</label>
						<div class="pom-agile">
							<!--span class="fa fa-user"></span-->
							<input placeholder="house name/Flat name" name="house" type="text" required="" autocomplete="off" > 
							<i style="color:red;" id="house"></i>
						</div>
						<div class="pom-agile">
							<input placeholder="Street" name="street" type="text" required="" autocomplete="off">
						</div>
						
						<div class="pom-agile">
                        


                        <select name="country" id="country-list" class="form-control" onChange="getState(this.value);">
<option value disabled selected>select country</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["country_id"]; ?>"><?php echo $country["c_name"]; ?></option>
<?php
}
?>
</select>
<label>State:</label><br/>
<select name="state" id="state-list" class="form-control" onChange="getCity(this.value);">
<option value="">select state</option>
</select>
<label>City:</label><br/>
<select name="dis" id="city-list" class="form-control">
<option value="">select district</option>
</select>
							
						

                         <!--?php
								include "dbconn.php";
                                $sql2="SELECT * FROM country";
								$result=mysqli_query($conn,$sql2);
                                if(mysqli_num_rows($result) > 0){
                                	
                                	   
                                echo "<select name='country'>";
                                	foreach ($conn->query($sql2) as $row) {
                                		
                                      

                               echo "<option value='" . $row['c_name'] . "' selected>" . $row['c_name'] . "</option>";

                                	}
                                	echo "</select>";
                                }
                                else{
                                	echo "No category";
                                }



								$sql="SELECT * FROM state";
								$result=mysqli_query($conn,$sql);
                                if(mysqli_num_rows($result) > 0){
                                echo "<select name='state'>";
                                	foreach ($conn->query($sql) as $row) {
                                       
                                    
                               echo "<option value='" . $row['s_name']  . "' selected>" . $row['s_name'] . "</option>";
                                	}
                                	echo "</select>";
                                }
                                else{
                                	echo "No category";
                                }



                                $sql1="SELECT * FROM district";
								$result=mysqli_query($conn,$sql1);
                                if(mysqli_num_rows($result) > 0){
                                echo "<select name='dis'>";
                                	foreach ($conn->query($sql1) as $row) {


                               echo "<option value='" . $row['d_name'] . "' selected>" . $row['d_name'] . "</option>";
                                	}
                                	echo "</select>";
                                }
                                else{
                                	echo "No category";
                                }


								
								?-->
							



						

						</div>
						
						
							
						<div class="pom-agile">
							<input placeholder="Pincode" name="pin" type="text" required="" autocomplete="off">
						</div>
					</div>
					<div class="form-style-agile">
						<label>Mobile number</label>
						<div class="pom-agile">
							<!--span class="fa fa-user"></span-->
							<input placeholder="Mobile number" name="ph" type="text" required="" autocomplete="off" id="contctno">
							<i style="color:red;" id="pointfn"></i>
						</div>
					</div>

					<div class="form-style-agile">
						<label>Email</label>
						<div class="pom-agile">
							<span class="fa fa-envelope-open"></span>
							<input placeholder="Email" name="email" type="email" required="" autocomplete="off" id="email" onBlur="getEmail(this.value)"><div id="emailDiv"></div>
							
						</div>
					</div>
					<div class="form-style-agile">
						<label>Security Questions</label>
						<div class="pom-agile">
							
							<input placeholder="Which is your favorite tripping place?" name="ans1" type="text" required="" autocomplete="off">
						</div>
					</div>
					<div class="form-style-agile">
					
						<div class="pom-agile">
							
							<input placeholder="Which is your favorite bike?" name="ans2" type="text" required="" autocomplete="off">
						</div>
					</div>
					<div class="form-style-agile">
					
						<div class="pom-agile">
							
							<input placeholder="Who is your best friend?" name="ans3" type="text" required="" autocomplete="off">
						</div>
					</div>
					<div class="form-style-agile">
						<label>Password</label>
						<div class="pom-agile">
							<span class="fa fa-key"></span>
							<input placeholder="Password" name="Password" type="password"  required="" autocomplete="off" id="pass1">
						</div>
					</div>
					<div class="form-style-agile">
						<label>Confirm Password</label>
						<div class="pom-agile">
							<span class="fa fa-key"></span>
							<input placeholder="Confirm Password" name="Conpassword" type="password"  required="" autocomplete="off" id="pass2" onblur="password()">
							<div id="cnfrmpass"></div>
						</div>
					</div>
					<!-- <div class="sub-agile">
						<input type="checkbox" id="brand1" value="">
						<label for="brand1">
							<span></span>I Accept to the Terms & Conditions</label>
					</div> -->
					<input type="submit" value="Submit">
				</form>
				<!-- social icons -->
				<!-- <div class="w3ls-social">
					<h3>or Login with</h3>
					<ul class="social-nav model-3d-0 footer-social social two">
						<li>
							<a href="#" class="facebook">
								<span class="fa fa-facebook"></span>
							</a>
						</li>
						<li>
							<a href="#" class="twitter">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="#" class="instagram">
								<span class="fa fa-instagram"></span>
							</a>
						</li>
						<li>
							<a href="#" class="pinterest">
								<span class="fa fa-linkedin"></span>
							</a>
						</li>
					</ul>
				</div> -->
				<!-- //social icons -->
			</div>
		</div>
	</div>
	<!-- //content -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
				
</script>	

</body>

</html>