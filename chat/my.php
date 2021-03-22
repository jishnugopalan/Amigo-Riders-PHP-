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
    $name=$row["name"];
    
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
  font-size: x-large;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
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


<h2>Chat Messages</h2>
<h2><?php echo $name ?></h2><br>

<div class="container" id="me"><p></p></div>

<div id="friend"></div>
<input type="hidden" name="fid" id="fid" value="<?php echo $eid ?>">

<input type="text" name="msg" id ="msg" placeholder="type your message here " required="" pattern="[a-z][A-Z]"> <input type="button" id="button" value="send" onclick="ajaxFunction()">
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

</body>
</html>
