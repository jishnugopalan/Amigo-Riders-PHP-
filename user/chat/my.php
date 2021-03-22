<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];
$eid=$_GET["eid"];

$sql="SELECT * FROM u_r_reg where email='$eid'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    $name3=$row["name"];
    $imageURL3 = '../../profile/'.$row["photo"];
  }
}
$sql2="SELECT * FROM u_r_reg where email='$id'";
$result=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    $name2=$row["name"];
    $imageURL2 = '../../profile/'.$row["photo"];

  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Njoy Trip a Travel Category Flat Bootstrap responsive Website Template | Blog :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Njoy Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Rokkitt:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!-- menu -->
<link rel="stylesheet" href="css/main.css">
<script type="text/javascript" src="js/main.js"></script>
<style>
/*body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}*/

/*.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
  font-size: x-large;
}*/

/*.darker {
  border-color: #ccc;
  background-color: #ddd;
}*/

/*.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 100px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}*/
img.p{

 border-radius: 100%; 
 font-size: large;
}
.header{
  border-style: solid;
  border-radius: 10px;
  background-color: #d3d1d9;
  color:black;
  font-size: large;
}
.text{
 /* background-color: royalblue;*/
}
input[type="text"]{
  /*font-size: larger;*/
  size:50px
  width:100px;
  border-style: solid;
  border-radius: 10px;
}
.me{
  /*background-image: url("images/images (1).jpg");*/
  /*background-repeat: no-repeat;
  background-size: cover;*/
  /*background-color: #d3d1d9;*/
  padding-bottom:5%;
  padding-top: 5%;
  padding-left: 10%;
  color:black;
  text-align: left;
  padding-right: 10%
  font-size:normal;
  border-style: solid;
  border-radius: 10px;

}

</style>
<script type="text/javascript" src="jquery-2.1.4.min.js"></script> 
  <script type="text/javascript">
  function ajaxFunction() {
    //noConflict();
    //console.log()
        var f=document.getElementById('fid').value;
        var m=document.getElementById('msg').value;
        console.log(f)
        console.log(m)
    $.ajax({url: "fetch.php",
    type: 'POST',
        //dataType: "json",
        data:{
            msg: m,
            fid:f
        },
      success: function(data){
        $("#me").html(data);
        document.getElementById('msg').value=""
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});
    
       }

       function getMessage() {
    //noConflict();
    //console.log()
        var f=document.getElementById('fid').value;
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "msg.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            fid:f
        },
      success: function(data){
        $("#me").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});

      

       }
    


       
      

  </script>
</head>
<body onload="getMessage()">

    <!-- menu -->
      <div id="toggle_m_nav">
        <div id="m_nav_menu" class="m_nav">
        <div class="m_nav_ham" id="m_ham_1"></div>
        <div class="m_nav_ham" id="m_ham_2"></div>
        <div class="m_nav_ham" id="m_ham_3"></div>
        </div>
      </div>

      <?php
      //session_start();
             include "header1.php";
      ?>
      <!-- <div class="container">
      <div class="agile-left">
        
      </div>
      <!-- wthree-top-grid -->
      <!-- <div class="wthree-top-grid">
        <h1><a href="">AMIGO RIDERS</a></h1>
        <div class="w3-agileits-border"> </div>
        <h2>Chats</h2>
      </div>
      <!-- //wthree-top-grid -->
   

<h2><center>Messenger</h2><font color="black"><a href=#msg><center>Start messaging</center></a></font></center>
<div class="header">
<img class="p"  src="<?php echo  $imageURL3; ?>" alt="" width="100" height="100"/><?php echo $name3 ?>
<?php
include"dbconn.php";
$sql3="SELECT * FROM login where email='$eid'";
$result=mysqli_query($conn,$sql3);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    $online=$row["online"];
    
  }
  if($online=='1')
  {
    $s='online';
     
  }
  else
  {
    $s='offline';
   
  }
}

?>
<br><br><?php echo $s ?></font>
</div>
<br>
<div class="me" id="me"><p><br><br></p></div>

<div id="friend"></div>
<input type="hidden" name="fid" id="fid" value="<?php echo $eid ?>">

  <br>
  <div class="header">
    <br>
 <!-- <img class="p"  src="<?php echo  $imageURL2; ?>" alt="" width="100" height="100"/><?php echo $name2 ?> -->

<div class="form-group">
<input type="text" name="msg" id ="msg" class="form-control" id="usr" placeholder="type your message" required=""  autocomplete="off" size="145"> 
</div>

</div>
<input type="button" class="btn btn-success" id="button" value="send" onclick="ajaxFunction()">


<!-- <div class="container">
  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>

<div class="container darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>

<div class="container">
  <img src="/w3images/bandmember.jpg" alt="Avatar" style="width:100%;">
  <p>Sweet! So, what do you wanna do today?</p>
  <span class="time-right">11:02</span>
</div>

<div class="container darker">
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
  <span class="time-left">11:05</span>
</div> -->
<?php
include"footer.php";
?>

</body>
</html>
