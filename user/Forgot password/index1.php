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
</head>
<body>
	<h1></h1>
	<div class="main-content">
		
        <div class="right-w3">
			<div class="sap_tabs">	
				<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<!--li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Sign up</span></li-->
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Which is your favorite tripping place</span></li>
						<!--li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Subscribe</span></li>
						<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Contact</span></li-->
				    <div class="clear"></div>
					</ul>	
					<div class="agile-tb">
						<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
							<form action="forgot1.php" method="post">				
								<!--input placeholder="Name" name="name" type="text" required=""-->
								<input placeholder="Type your answer" name="ans1" type="text" required="" autocomplete="off">						
								<!--input placeholder="Password" name="password" type="password" required=""-->	
								<!--input placeholder="Confirm Password" name="password" type="password" required=""-->
								<!--span class="checkbox1">
									<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>I Agree To All Terms And Conditions</label>
								</span-->
                                 <a href='../index.php'><font color="yellow">Home</font></a>&nbsp&nbsp&nbsp
                                  <a href='index3.php'><font color="white">Tell another question</font></a>
                                
								<input type="submit" name="ques1" value="Submit"/>
							</form>
						</div>	
						<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
							<form action="#" method="post">						
								<input placeholder="Email Address" name="email" class="mail" type="text" required="">
								<input placeholder="Password" name="password" class="lock" type="password" required="">		
								<span class="checkbox1">
									<label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
								</span>
								
								<input type="submit" value="Sign in"/>
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
		<p> &copy;2017 AMIGO RIDERS. All Rights Reserved | Design by <a href="#">amigoriders</a></p>
	</div>
	<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
</body>
</html>