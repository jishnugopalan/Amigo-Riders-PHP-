<!--A Design by W3layouts
   Author: W3layout
   Author URL: http://w3layouts.com
   License: Creative Commons Attribution 3.0 Unported
   License URL: http://creativecommons.org/licenses/by/3.0/
   -->
<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Summer Camp Form a Flat Responsive Widget Template :: w3layouts </title>
      <!-- Meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="keywords" content="Summer Camp Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
         />
      <script>
         addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
      </script>
      <!-- Meta tags -->
      <!-- Calendar -->
      <link rel="stylesheet" href="css/jquery-ui.css" />
      <!-- //Calendar -->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//style sheet end here-->
      <!-- Google fonts here-->
      <link href="//fonts.googleapis.com/css?family=Barlow:300,400,500" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
      <style type="text/css">
          a:link{
      color:white;
      font-size: 30px;
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
      color:black;
     }
      </style>
      <!--//Google fonts here-->
   </head>
   
   <body>
      <h1 class="header-w3ls">
        Bike Selling Form
      </h1>
      <center>
      <?php
      //echo "<a class='cclass' href='index.php'></a> &nbsp &nbsp &nbsp";
              echo "<a class='cclass' href='../index.php'>Home</a> &nbsp &nbsp &nbsp";
              ?></center>
      <!-- multistep form -->
      <div class="main-bothside">
         <form action="sell.php" method="post" enctype="multipart/form-data">
            <div class="main-title">
               <h2> </h2>
            </div>
            <div class="form-group">
               <!--div class="form-grid-w3ls">
                  <input type="text" class="form-control" placeholder="Name" required="">
               </div>
               <div class="form-grid-w3ls">
                  <input type="text" class="form-control" placeholder="Last Name" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-grid-w3ls">
                  <input type="email" class="form-control" placeholder="Email" required="">
               </div>
               <div class="form-grid-w3ls">
                  <input type="text" class="form-control" placeholder="Phone" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" placeholder="Address" required="">
               </div>
               <div class="form-mid-w3ls">
                  <input type="text" placeholder="Street" required="">
               </div>
               <div class="form-mid-w3ls">
                  <input type="text" placeholder="City" required="">
               </div>
            </div>
            <div class="form-group">
               <div class="form-mid-w3ls">
                  <input type="text" placeholder="Pin Code" required="">
               </div-->
               

            </div>
            <br><br>
            <div class="form-group">
            <div class="form-control-w3l">
            	 <h2>Upload bike photo:  &nbsp &nbsp &nbsp &nbsp 
    <input type="file" name="bike" required=""></h2>
          <br> <h2>Upload liscense photo : 
    <input type="file" name="liscensecopy" required=""></h2>
     <br><h2>Upload R.C book photo:
    <input type="file" name="rcbookcopy" required=""></h2><br><br>

 </div>
</div>

            <div class="main-title">
               <h3></h3>
            </div>
            <div class="form-group">
            	 <div class="form-grid-w3ls">
                  <input type="text" class="form-control" placeholder="Bke name" required="" name="bikename" autocomplete="off" pattern="[A-Za-z0-9 ]{3,}">
               </div>
               <div class="form-grid-w3ls">
                  <input  name="bikenumber" type="text" placeholder="Bike number" required="" autocomplete="off" pattern="[A-Za-z0-9 ]{3,}">
               </div>
           </div>
           <div class="form-group">
               <div class="form-grid-w3ls">
                  <input type="text" class="form-control" placeholder="Bike Amount in Rs" required="" name="amount" autocomplete="off" pattern="[0-9]{5,}">
               </div>
               <div class="form-grid-w3ls">
                 <h1>Status
                  <select name="status" selected>
<option>Ready to sell</option>
<option>Not ready to sell</option>
</select></h1>

               </div>
            </div>
            <!--div class="form-group">
               <div class="form-grid-w3ls">
                  <input type="text" class="form-control" placeholder="Time" required="">
               </div>
               <div class="form-grid-w3ls">
                  <input type="text" class="form-control" placeholder="Number persons to participate" required="">
               </div>
            </div>
            <div class="main-title">
               <h3></h3>
            </div>
            <div class="form-group">
               <div class="form-grid-w3ls">
                  <input type="text" class="form-control" placeholder="Booking fee" required="">
               </div>
               <div class="form-grid-w3ls">
                  <input type="text" class="form-control" placeholder="Event status" required="">
               </div>
            </div-->

            <div class="form-control-w3l">

               <textarea name="features" placeholder="Featurs..." autocomplete="off" pattern=".{3,}"></textarea>
            </div>
           
            <input type="submit" value="Submit" name="submit">
         </form>
      </div>
      <div class="copy">
         <p>©2018 Summer Camp Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
      </div>
      <!-- js -->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!-- //js -->
      <!-- Calendar -->
      <script src="js/jquery-ui.js"></script>
      <script>
         $(function () {
         	$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
         });
      </script>
      <!-- //Calendar -->
   </body>
</html>