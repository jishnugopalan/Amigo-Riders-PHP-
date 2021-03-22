<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$t=date("Y-m-d");
?>
<!DOCTYPE html>
<html>
<head>
	<script typ="text/javascript" src="innerHTMLValidation.js" ></script>
<title>Jaunt Booking Form Responsive Widget Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Jaunt Booking Form Responsive, Signup form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">

<style type="text/css">
	
	myclass{
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
</style>
</head>
<body>



<h1>Event Creation Form</h1>

<div class="w3l_full">
<div class="sap_tabs">
<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
<ul class="resp-tabs-list">
<center><li class="resp-tab-item" ><span>Creat your Event</span></li></center>
<button><?php echo "<a href='../index.php'>Home</a>"; ?></button>

</ul>
<div class="resp-tabs-container">
<div class="tab-1 resp-tab-content" >
<div class="login-top agileits">
<div class="w3layouts_main_grid">
<form action="event.php" method="post" class="w3_form_post" name="form1">
<div class="W3l_fir">
<h5>Event Name  </h5>
<input type="text" name="name" placeholder="" >
</div>
<div class="W3_phn">
<h5>Venue</h5>
<input type="text" name="place" placeholder="" >
</div>
<div class="clear"></div>
<div class="agile_dat">
<h5> Date </h5>
<input type="date" name="day" placeholder="Departure Date" required="" min="<?php echo $t ?>">
</div>
<div class="agile_time">
<h5>Time </h5>
<input type="time" name="Time" placeholder=" " required="">
</div>
<!--div class="clear"></div>
<div class="w3ls_dat">
<h5>Return Date *</h5>
<input type="date" name="day" placeholder="Return Date" required="">
</div>
<div class="w3ls_time">
<h5>Time *</h5>
<input type="time" name="Time" placeholder=" " required="">
</div-->
<div class="clear"></div>
<div class="wthree_nop">
<h5>No of Persons to participate </h5>
<input type="number" name="nop" min="3" max="50" required=""><br>
</div>
<div class="wthree_jrn">
<h5>Event Type </h5>
<select name="etype">
<option>Racing</option>
<option>Mud race</option>
<option>Stunting</option>
</select>
</div>
<div class="clear"></div>
<div class="w3l_txtr">
<div class="w3layouts_pik">
	<h5><font color="white">Event Participatin fee</font> </h5>
	<input type="number" name="epf" placeholder="" required="" min="100">
<textarea name="des" placeholder="Description..." required=""></textarea>

</div>
<div class="w3layouts_drp">
	<h5><font color="white">Event winninig price</font> </h5>
<input type="number" name="ewp" placeholder="" required="" min="1000">
<h5>Status</h5>
<select id="category" name="status" required="">
													
													<option value="on">on</option>
													<option value="off">off</option>
												
													
												</select>


</div>
<div class="clear"></div>
</div>
<div class="aitssubmitw3ls">
<input type="submit" name="submit"   onClick="return validateForm()"  value="submit">
</div>
</form>
</div>	
</div>				
</div>

											
								</form>
							</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer">
 <!--p>&copy; Jaunt Signup Form  2018. All Rights Reserved | Design by </p-->
 </div>
 <!--script-->
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
<!--script-->

</body>
</html>