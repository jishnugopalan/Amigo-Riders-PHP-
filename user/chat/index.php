<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
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
<!-- //menu -->
<script type="text/javascript">
	 function getFriend(){
    //noConflict();
    //console.log()
        var f=document.getElementById('friend').value;
        //var m=document.getElementById('msg').value;
        console.log(f)
        //console.log(m)
    $.ajax({url: "search.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            fid:f,
        },
      success: function(data){
        $("#me").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});
    
       }

        function messages(){
    //noConflict();
    //console.log()
        //var f=document.getElementById('friend').value;
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "getmsg.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            //fid:f,
        },
      success: function(data){
        $("#messages").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});
    
       }
</script>
<style type="text/css">
	img.p{

 border-radius: 100%; 
 font-size: large;
}
.un{
  padding-left:30px;
  padding-top:5px;
  background-color: lightblue;
  
}
a.txt{
  text-decoration: none;
}
.read{
   padding-left:30px;
  padding-top:5px;
  /*background-color: skyblue;*/
}
</style>
</head>
<body>
	<div class="banner">
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
             include "header.php";
			?>
			<div class="container">
			<div class="agile-left">
				
			</div>
			<!-- wthree-top-grid -->
			<div class="wthree-top-grid">
				<h1><a href="">AMIGO RIDERS</a></h1>
				<div class="w3-agileits-border"> </div>
				<h2>Chats</h2>
			</div>
			<!-- //wthree-top-grid -->
		</div>
	</div>

<center><h1><font color="black"><B>Select your friend</B></font></h1>
  <form>
<input type="text" name="friend" id="friend" placeholder="search" required=""><input type="button" value="search" onclick="getFriend()">
</form>
</center>
<div id=me></div>
<hr>
<div id="messages"></div>
<?php
$sql="SELECT * FROM u_r_reg where email!='$id' order by name";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$name=$row["name"];
		$eid=$row["email"];
		$imageURL = '../../profile/'.$row["photo"];
    
    $sql2="SELECT COUNT(*) FROM chat_messages where femail='$id' and email='$eid' and cstatus='0'";
    $result1=mysqli_query($conn,$sql2);
if(mysqli_num_rows($result1) > 0)
{
	while($row1=mysqli_fetch_assoc($result1))
	{
	$no=$row1["COUNT(*)"];
}
}

$sql4="SELECT * FROM chat_messages where email='$eid' and femail='$id' and cstatus='0'";
$result2=mysqli_query($conn,$sql4);
if(mysqli_num_rows($result2) > 0)
{
  while($row2=mysqli_fetch_assoc($result2))
  {
    $msg=$row2["msg"];
  }

?>
<div class="un">

  <a class="txt" href="my.php?eid=<?php echo $eid ?>">
	<font color="black"><img class="p"  src="<?php echo  $imageURL; ?>" alt="" width="100" height="100"/>
	<b><?php echo $name ?></b><font color="red">(<?php echo $no?>)</font></font>
<input type="hidden" value="<?php echo $eid ?>" name="email"><br><br>

<font color="red"><?php echo $msg ?></font><br>
<font color="black">You have some unread messages...
</a><br>
<hr>
</div>
<?php

}
}
}
?>
<?php
$sql="SELECT * FROM u_r_reg where email!='$id' order by name";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    $name=$row["name"];
    $eid=$row["email"];
    $imageURL = '../../profile/'.$row["photo"];
    
//     $sql2="SELECT COUNT(*) FROM chat_messages where femail='$id' and email='$eid' and cstatus='0'";
//     $result1=mysqli_query($conn,$sql2);
// if(mysqli_num_rows($result1) > 0)
// {
//   while($row1=mysqli_fetch_assoc($result1))
//   {
//   $no=$row1["COUNT(*)"];
// }
// }
?>
<div class="read">
  <a class="txt" href="my.php?eid=<?php echo $eid ?>">
<font color="black"><img class="p"  src="<?php echo  $imageURL; ?>" alt="" width="100" height="100"/>
  <b><?php echo $name ?></b><!-- <font color="red">(<?php echo $no?>)</font></font> -->
<input type="hidden" value="<?php echo $eid ?>" name="email">


</a><br>
<hr>
</font>
</div>
<?php
	
}
}
?>
<?php
include"footer.php";
?>
</body>
</html>
