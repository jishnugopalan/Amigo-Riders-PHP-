<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$t=date("Y-m-d");
session_start();
$id=$_SESSION["email"];
include"dbconn.php";
$sql="SELECT * FROM trip where email='$id' and ending_date>='$t'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
?>
<script type="text/javascript">
	alert("You are alredy created a trip.You can create a new trip after the trip ending date");
	location="../index.php";

</script>
<?php
}
else
{
?>
<!DOCTYPE html>
<html>
<head>
<title>Jaunt Booking Form Responsive Widget Template | Home :: w3layouts</title>
<script typ="text/javascript" src="innerHTMLValidation.js" ></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Jaunt Booking Form Responsive, Signup form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<script type="text/javascript">
	function ajaxFunction(ed) {
    //noConflict();
    //console.log()
        // var f=document.getElementById('sid_'+bid).value;
        var a=document.getElementById("sdate").value;
         
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "dateval.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            sdate:a,
         edate:ed
        },
      success: function(data){
        $("#like").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});

      

       }
</script>
<style type="text/css">
	button{
		font-size:  35px;
		border-radius: 10px;
		background-color: green;
	}
	a:link{
		color: white;
	}
	a:visited{
		color:white;
	}
	/*.header{
		

	}*/

</style>
</head>
<body>
	
<h1>Trip Creation Form</h1>

<div class="w3l_full">
<div class="sap_tabs">
<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
<ul class="resp-tabs-list">
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nb<li class="resp-tab-item" ><span><a href="../index.php">Home</a></span></li>
<!-- <?php
 echo "<a href='../index.php'><button>Home</button></a><br>";
 ?> -->
<!-- <li class="resp-tab-item" ><label></label><span>Trip plan</span></li>
<li class="resp-tab-item" ><label></label><span>Flights</span></li> -->
</ul>
<div class="header">
<div class="resp-tabs-container">
<div class="tab-1 resp-tab-content" >
<div class="login-top agileits">
<div class="w3layouts_main_grid">
<form action="trip.php" method="post"  name="form1">
<div class="W3l_fir">
<h5>Destination</h5>
<input type="text" name="dest" placeholder="" required="" autocomplete="off">
</div>
<div class="clear"></div>
<div class="W3_phn">
<h5>Starting place </h5>
<input type="text" name="splace" placeholder="" required="" autocomplete="off">
</div>
<div class="clear"></div>
<div class="agile_dat">
<h5>Trip Starting Date </h5>
<input type="date" name="sdate" placeholder="" required="" autocomplete="off" min="<?php echo $t ?>" id="sdate">&nbsp &nbsp &nbsp
</div>
<!--div class="agile_time">
<h5>Time *</h5>
<input type="time" name="Time" placeholder=" " required="">
</div-->
<!--div class="agile_time"-->

<div class="clear"></div>

<div class="agile_dat">
<h5>Trip ending Date </h5>
<input type="date" name="edate" placeholder="" required="" autocomplete="off" min="<?php echo $t ?>" id="edate" onchange="ajaxFunction(this.value)">
</div>
<!--div class="w3ls_time">
<h5>Time *</h5>
<input type="time" name="Time" placeholder=" " required="">
</div-->
<div class="clear"></div>
<div id="like"></div>
<div class="wthree_nop">
<h5>Number of bikes</h5>
<input type="number" name="nop" min="3" max="25">
<br><br>
<h5>Description</h5>
<br>
<textarea rows=5 cols=20 name="des" placeholder="Description about the trip..." required="" autocomplete="off"></textarea><br>
</div>
<!--div class="wthree_jrn">
<h5>Journey Type *</h5>
<select>
<option>Single</option>
<option>Double</option>
</select>
</div-->
<div class="clear"></div>
<!-- <div class="w3l_txtr"> -->
<!-- <div class="w3layouts_pik"> -->
<!-- 	<div class="wthree_nop"> -->
	<!-- <h5>Description</h5> -->
<!-- <input type="text" name="des" placeholder="Description about the trip..." required="" autocomplete="off"> -->
</div>
<!--div class="w3layouts_drp"-->
<!-- <div class="clear"></div> -->
<div class="W3l_fir">
	<h5>Status</h5>
	<select name="status" selected>
<option>Trip on</option>
<option>Trip off</option>
</select>

</div>
<div class="clear"></div>
</div>
<!--div class="aitssubmitw3ls"-->

<input type="submit" name="submit" onClick="return validateForm()" value="Submit">
<br><br><br>
</div>
</form>
</div></div></div></div></div></div></div></div></center>


<div class="tab-1 resp-tab-content" >
	<div class="login-top agileits">
								
								<!-- <div class="w3layouts_main_grid">
									<form action="#" method="post" class="w3_form_post">
										<div class="w3_agileits_main_grid w3l_main_grid">
											<div class="agileits_grid">
												<h5>Visiting places </h5>
												<div class="nam">
													<input type="text" name="vplace" placeholder="" required="">

												</div>
												</div>
												<div class="nam1">
												<h5>Name * </h5>
													<input type="text" name="Last name" placeholder="Last Name" required="">
												</div>
												<div class="clear"></div>
											</div>
										
										<div class="w3_agileits_main_grid w3l_main_grid">
											<div class="agileits_gride">
												<h5>E-mail </h5>
													<input type="email" name="Email" placeholder="Email ID" required="">
											</div>
											<div class="wthree_gridr">
												<h5>Room Type</h5>
												<select id="category" name="category" required="">
													<option value="none">None</option>
													<option value="category1">Single Room</option>
													<option value="category2">Double Room</option>
													<option value="category3">Suit Room</option>
													
												</select>
											</div>
											<div class="agileits_w3layouts_gridg">
												<h5>No of Guests *</h5>
												<select id="category1" name="category1" required="">
													<option value="category1">01</option>
													<option value="category2">02</option>
													<option value="category3">03</option>
													<option value="category4">04</option>
													<option value="category2">05</option>
													<option value="category3">06</option>
												</select>
											</div>
											<div class="clear"></div>
										
										</div>
										
										
										
										<div class="agileits_w3layouts_main_grid w3ls_main_grid">
											<div class="agileinfo_grid">
											<h5>Check In &amp; Time *</h5>
												
												<div class="agileits_w3layouts_main_gridl">
													<input type="date" name="day" placeholder="Departure Date" required="">
												</div>
												<div class="agileits_w3layouts_main_gridr">
													<input type="time" name="Time" placeholder=" " required="">
												</div>
												<div class="clear"> </div>
											</div>
										</div>
										<div class="agileits_w3layouts_main_grid w3ls_main_grid">
											<div class="agileinfo_grid">
											<h5>Check Out &amp; Time *</h5>
												
												<div class="agileits_w3layouts_main_gridl">
													<input class="date" id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
												</div>
												<div class="agileits_w3layouts_main_gridr">
													<input type="time" name="Time" placeholder=" " required="">
												</div>
												<div class="clear"> </div>
											</div>
										</div>
										<div class="w3_main_grid">
											
											<div class="w3_main_grid_right">
												<input type="submit" value="Search">
											</div>
											<div class="clear"> </div>
										</div>
									</form>
								</div>	
							</div>
</div>
<div class="tab-1 resp-tab-content" >
<div class="login-top agileits">
								
								
								<form action="#" method="post">
									<div class="w3_agileits_main_grid w3l_main_grid">
										<div class="agileits_grid">
											<h5>Name * </h5>
											<div class="name">
												<input type="text" name="First name" placeholder="Your Name" required="">
											</div>
											
										</div>
										<div class="agileits_grid">
											<h5>E-mail </h5>
												<input type="email" name="Email" placeholder="Email ID" required="">
										</div>
										<div class="clear"></div>
									</div>
									
										<div class="agileinfo_main_grid">
											<div class="agileits_w3layouts_grid">
												<h5>From*</h5>
												<select id="category1" name="category1" required="">
													<option value="category1">Australia</option>
													<option value="category2">Singapore</option>
													<option value="category3">America</option>
													<option value="category3">London</option>
													<option value="category3">Goa</option>
													<option value="category3">Canada</option>
													<option value="category3">Srilanka</option>
												</select>
											</div>
									
											<div class="agileits_w3layouts_grid">
												<h6>To*</h6>
												<select id="category1" name="category1" required="">
													<option value="category2">Singapore</option>
													<option value="category1">Australia</option>
													<option value="category3">America</option>
													<option value="category3">London</option>
													<option value="category3">Goa</option>
													<option value="category3">Canada</option>
													<option value="category3">Srilanka</option>
												</select>
											</div>
										
											<div class="clear"></div>
										</div>
									
										<div class="agileits_main_grid w3_agileits_main_grid">
											<div class="wthree_grid">
												<h5>Adults*</h5>
												<select id="category1" name="category1" required="">
													<option value="category1">01</option>
													<option value="category2">02</option>
													<option value="category3">03</option>
													<option value="category4">04</option>
													<option value="category2">05</option>
													<option value="category3">06</option>
												</select>
											</div>
									
										
										
											<div class="agileits_w3layouts_grid3">
												<h5>Children*</h5>
												<select id="category1" name="category1" required="">
													<option value="category1">01</option>
													<option value="category2">02</option>
													<option value="category3">03</option>
													<option value="category4">04</option>
													<option value="category2">05</option>
													<option value="category3">06</option>
												</select>
											</div>
											
											<div class="clear"></div>
										</div>
										<div class="agileinfo_main_grid1">
											<div class="agileits_w3layouts_grid mim">
												<h5>Travel Class*</h5>
												<select id="category2" name="category1" required="">
													<option value="category1">Economy class</option>
													<option value="category2">Premium Economy</option>
													<option value="category3">Business class</option>
													<option value="category3">First Class</option>
												</select>
											</div>
										
										
										
											<div class="agileinfo_grid1">
											<h5>Departure On*</h5>
												
												<div class="agileits_w3layouts_main_grid1">
												<input type="date" name="day" placeholder="Departure Date" required="">
												</div>
												
											</div>
											<div class="clear"> </div>
										</div>
										
										<div class="agileinfo_main_grid">
											<div class="agileits_w3layouts_grid2">
												<h5>Journey type*</h5>
												<select id="category1" name="category1" required="">
													<option value="category1">One Way</option>
													<option value="category2">Round trip</option>
												</select>
											</div>
												
										
										<div class="w3l_code">
										<h5>Promotion Code</h5>
												<input type="text" name="First name" placeholder="Code">
											</div>
									<div class="clear"></div>
									</div>
											<div class="aitssubmitw3ls">
												<input type="submit" name="submit" value="Search">
											</div>
											
								</form>
							</div>
</div>
</div>
</div>
</div>
</div> -->
<div class="footer"
 <p>&copy; Jaunt Signup Form  2018. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="blank">W3layouts</a></p-->
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
<?php
}
?>
</body>
</html>