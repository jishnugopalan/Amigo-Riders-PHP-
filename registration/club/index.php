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
<title>Softball Registration Form Flat Responsive widget Template :: w3layouts</title>
<script type="text/javascript" src="js/innerHTMLValidation.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Softball Registration Form Widget Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- font files -->
<link href="//fonts.googleapis.com/css?family=Spectral" rel="stylesheet">
<!-- /font files -->
<!-- css files -->
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css files -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

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
      font-weight: normal;
        padding: 12px 30px;
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
	
					
						<a class="cclass" href="../../guest/index.html"><b>Home</b></a>
					
					
						<a class="cclass" href="../../guest/about.html"><b>About Us</b></a>

					


					

					
				</div> -->
</div>
	<div class="w3-banner-main">
		<div class="center-container">
			<h1 class="header-w3ls">CLUB SIGNUP FORM <br>
				<h3><center><a class="cclass" href="../../guest/index.html"><b>Home</b></a></center></h3></h1>
			<div class="content-top">
				<div class="content-w3ls">
					<div class="form-w3ls">
						<form action="club.php" method="post" name="form1">
							<div class="content-wthree1">
								<div class="grid-agileits1">
									<div class="form-control"> 
										<label class="header">Club Name </label>
										<input type="text" id="name" name="name1" placeholder="" title="Please enter your Full Name" required="" autocomplete="off">
										<label class="header"> Club registration I.D</label>
							
							<input type="text" id="name" name="crid" placeholder="" title="Please enter club registration I.D"  autocomplete="off">
							
									</div>
									<div class="form-control">
										<label class="header"></label>
										<label class="header">Club Address - Current Place</label>
							
							<input type="text" id="name" name="place" placeholder="" title="Please enter your House name or flat name" required="" autocomplete="off">
							
						</div>
						
									
									
									
									
									<div class="grid-w3layouts1">
									<div class="w3-agile1">
										
									</div>
								</div>
								<!--div class="form-control">
							<label class="header">Date of birth </label>	
							<input  id="datepicker1" name="Text" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
						</div-->
						
								</div>
							</div>
					</div>
					<div class="form-w3ls-1">
						
						<div class="form-control"> 
							<label class="header"> Club ownership</label>
							
							<input type="text" id="name" name="cowner" placeholder="" title="Please enter the club owner ship" required="" autocomplete="off">
							
							<label class="header">Club Issued Date</label>	
							<input  id="datepicker1" name="date" type="date" required="" autocomplete="off" max="<?php echo date("Y")-18; ?>-12-31">
							
								<!--label class="header">District</label>
							
							<input type="text" id="name" name="dis" placeholder="" title="Please enter your district" required=""-->

							
							
							<label class="header">Street</label>
							
							<input type="text" id="name" name="street" placeholder="" title="Please enter your Street name" required="" autocomplete="off">
							
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
									<!--input type="text" id="name" name="state" placeholder="" title="Please enter your state" required=""-->
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
							
							<input type="text" id="name" name="pin" placeholder="" title="Please enter valid pin code" required="" autocomplete="off">
							<!--label class="header">Country</label>
							<input type="text" id="name" name="country" placeholder="" title="Please enter your country" required="" autocomplete="off"-->
							<label class="header">Phone Number</label>
							
							<input type="text" id="name" name="ph" placeholder="" title="Please enter valid phone number" required="" autocomplete="off">
							<div class="form-control">	
										<label class="header">Email </label><div id="emailDiv"></div>
										<input type="email" id="email" name="email" placeholder="" title="Please enter a Valid Email Address" required="" autocomplete="off" onBlur="getEmail(this.value)">
									</div>
									<label class="header">Security Questions</label>
							
							<input type="text" id="name" name="ans1" placeholder="Which is your favorite tripping place?" title="Please fillout this field" required="" autocomplete="off">

							<input type="text" id="name" name="ans2" placeholder="Which is your favorite bike?" title="Please fillout this field" required="" autocomplete="off">
							<input type="text" id="name" name="ans3" placeholder="Who is your best friend?" title="Please fillout this field" required="" autocomplete="off">
									<label class="header">Password</label>
							
							<input type="password" id="name" name="pass" placeholder="" title="Please enter valid mobile number" required="" autocomplete="off" id="pass1">
								<label class="header">Confirm Password</label>
							
							<input type="password" id="name" name="pass1" placeholder="" title="Enter the above password again" required="" autocomplete="off" id="pass2" onblur="password()">
									<div id="cnfrmpass"></div>
							
							
							
									  <input type="submit"  onClick="return validateForm()" value="Sign up"> 
									  </form>
					</div>				
					<div class="clear"></div>
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
