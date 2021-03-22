<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include "dbconn.php";
$query ="SELECT * FROM country";
$results = mysqli_query($conn,$query);
?>

	
<!doctype html>
<html lang="en">
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
<script type="text/javascript" src="js/innerHTMLValidation.js" ></script>
<title>Softball Registration Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Softball Registration Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />




<style>
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
     h3{
     	color:yellow;
     	font-size: 20px;
     }
     a:link{
      color:white;
      font-size: 20px;
      font-family: serif;
      font-weight: bold;
     }
     a.cclass{
      text-decoration: none
     }
     a:visited{
      color:white;
     }
     a:hover{
      color:white;
     }
     
</style>

</head>
<body>
	<!-- <div class="myclass">
	AMIGO RIDERS<br>
	<h3>Explore your dreams</h3><br>
	<div class="linkclass">
	
				
						<a class="cclass" href="../../guest/index.html"><b>Home</b></a>&nbsp &nbsp
					
						<a class="cclass" href="../../guest/about.html"><b>About Us</b></a>

					

						
					

					
				</div>
</div> -->

	<div class="w3-banner-main">
		<div class="center-container">
			<h1 class="header-w3ls"> RIDERS-SIGNUP FORM<br>
				<h3><center><a class="cclass" href="../../guest/index.html"><b>Home</b></a></center></h3></h1>
			<div class="content-top">
				<div class="content-w3ls">
					<div class="form-w3ls">
						<form action="rider.php" method="post" name="form1">
							<div class="content-wthree1">
								<div class="grid-agileits1">
									<div class="form-control"> 
										<label class="header">Rider Name </label>
										<input type="text" id="name" name="name1" placeholder="" title="Please enter your Full Name" autocomplete="off" required="" pattern="[a-zA-Z]+\[ .]" >
										
										
									</div>
									
									
									
									
									<div class="grid-w3layouts1">
									<div class="w3-agile1">
										<label class="rating">Choose gender </label>
										<ul>
											<li>
												<input type="radio" id="a-option" name="selector1" value="male" required="" checked="">
												<label for="a-option">Male </label>
												<div class="check"></div>
											</li>
											<li>
												<input type="radio" id="b-option" name="selector1" value="female" required="">
												<label for="b-option">Female</label>
												<div class="check"><div class="inside"></div></div>
											</li>
											<li>
											<input type="radio" id="c-option" name="selector1" value="others" required="">
												<label for="c-option">Others </label>
												<div class="check"></div>
											</li>
											
											
										</ul>
									</div>
								</div>
								<div class="form-control">
						<label class="header">Date of birth </label>	
							<input  id="datepicker1" name="Text" type="Date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}"  autocomplete="off" required="" max="<?php echo date("Y")-18; ?>-12-31">
						</div>
								</div>
							</div>
					</div>
					<div class="form-w3ls-1">
						
						<div class="form-control"> <br><br>
							<label class="header">Address </label>
							<label class="header">House/Flat name </label>
							
							<input type="text" id="name" name="house" placeholder="" title="Please enter your House name or flat name"  autocomplete="off" required="" pattern="[a-zA-Z]+\[ .]+\[0-9]">
							<label class="header">Street</label>
							
							<input type="text" id="name" name="street" placeholder="" title="Please enter your Street name"  autocomplete="off"  required="" pattern="[a-zA-Z]+\[ .]">
								<!--label class="header">District</label>
							
							<input type="text" id="name" name="dis" placeholder="" title="Please enter your district"  autocomplete="off"  required="" pattern="[a-zA-Z]+\[ .]"-->

							
							
							
						</div>
							
						
							

						</div>
						
						</div>	
						
						<div class="form-control">
								<!--label class="header">State </label>		
									<!--select class="form-control">
										<option></option>
										<option>City-1</option>
										<option>City-2</option>
										<option>City-3</option>
										<option>City-4</option>
										<option>City-5</option>
									</select-->
									<!--input type="text" id="name" name="state" placeholder="" title="Please enter your state"  autocomplete="off"  required="" -->



                         <select name="country" id="country-list" class="demoInputBox" onChange="getState(this.value);" required="">
<option value disabled selected>Select Country</option>
<?php
foreach($results as $country) {
?>
<option value="<?php echo $country["country_id"]; ?>"><?php echo $country["c_name"]; ?></option>
<?php
}
?>
</select>

<select name="state" id="state-list" class="demoInputBox" onChange="getCity(this.value);" required="">
<option value="">Select State</option>
</select>

<select name="dis" id="city-list" class="demoInputBox" required="">
<option value="">Select District</option>
</select>
							
						</div>
						<label class="header">Pin code</label>
							
							<input type="text" id="name" name="pin" placeholder="" title="Please enter valid pin code"  autocomplete="off"  required="">
							<!--label class="header">Country</label>
							
							<input type="text" id="name" name="country" placeholder="" title="Please enter valid pin code"  autocomplete="off"  required="" pattern="[a-zA-Z]+\[ .]"-->
							
							<label class="header">Work at</label>
							
							<input type="text" id="name" name="work" placeholder="" title="Please enter about your job"  autocomplete="off"  required="" pattern="[a-zA-Z]+\[ .]">
							<label class="header">Expertised in</label>
							
							<input type="text" id="name" name="exp" placeholder="" title="Please enter your specialites"  autocomplete="off"  required="" pattern="[a-zA-Z]+\[ .]">
							<!--label class="header">Add a bio</label>
							
							<input type="text" id="name" name="exp" placeholder="" title="Please add a bio"  autocomplete="off"-->
							<label class="header">Mobile Number</label>
							
							<input type="text" id="name" name="ph" placeholder="" title="Please enter valid mobile number"  autocomplete="off"  required="" pattern="[0-9]+\[ .]">
							<div class="form-control">

										<label class="header">Email </label>
										<input type="email" id="email" name="email" placeholder="" title="Please enter a Valid Email Address" id="email" onBlur="getEmail(this.value)"><div id="emailDiv"></div>
									</div>
									<label class="header">Security Questions</label>
							
							<input type="text" id="name" name="ans1" placeholder="Which is your favorite tripping place?" title="Please enter a strong password"  required="" pattern="[a-zA-Z]+\[ .]" autocomplete="off">

							<input type="text" id="name" name="ans2" placeholder="Which is your favorite bike?" title="Please enter a strong password"  autocomplete="off"  required="" pattern="[a-zA-Z]+\[ .]">
							<input type="text" id="name" name="ans3" placeholder="Who is your best friend?" title="Please enter a strong password"  autocomplete="off"  required="" pattern="[a-zA-Z]+\[ .]">
									<label class="header">Password</label>
							
							<input type="password" id="name" name="pass" placeholder="" title="Please enter a strong password"  autocomplete="off">
								<label class="header">Confirm Password</label>
							
							<input type="password" id="name" name="pass1" placeholder="" title="Enter the above password again" autocomplete="off">
									
						
							<input type="submit"  onClick="return validateForm()" value="Submit">  
									  </form>
					</div>				
					<div class="clear"></div>
				</div>
			</div>	
				
				
		</div>
	</div>

<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
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
				



</body>
</html>
