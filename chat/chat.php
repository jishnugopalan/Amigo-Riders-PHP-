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
	<title></title>
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
	<!-- <script type="text/javascript">
    window.onload=function(){
       
       	$.ajax({url: "reply.php",
		type: 'POST',
        //dataType: "json",
         data:{
            
             fid:f
         },
			success: function(data){
				$("#friend").html(data);
				
    			console.log("inside success")
  			},
  			error: function(errorMessage){
  				console.log(errorMessage)
  			}});

       }
    
  </script> -->
<h2><?php echo $name ?></h2><br>
<div id="me"></div>
<div id="friend"></div>
<input type="hidden" name="fid" id="fid" value="<?php echo $eid ?>">

<input type="text" name="msg" id ="msg" placeholder="type your massage" required="" pattern="[a-z][A-Z]"> <input type="button" id="button" value="send" onclick="ajaxFunction()">

</body>
</html>
