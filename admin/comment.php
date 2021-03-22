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
<style type="text/css">
	img.p{

 border-radius: 100%; 
 font-size: large;
}
.button {
  /* text styles */
  font-size: 11px;
  line-height: 18px;
  color: #fff;
  text-decoration: none;
  text-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
  
  /* box styles */
  display: inline-block;
  height: 19px;
  padding: 0 10px;
  border: 1px solid;
  border-color: #2d86b6 #24659e #255796;
  border-radius: 21px;
  box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2) inset, 0 1px 1px rgba(1, 4, 8, 0.2);
  
  /* gradients */
  background-color: #52b6ec;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF52B6EC', endColorstr='#FF2E75CE');
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #52b6ec), color-stop(100%, #2e75ce));
  background-image: -webkit-linear-gradient(top, #52b6ec 0%, #2e75ce 100%);
  background-image: -moz-linear-gradient(top, #52b6ec 0%, #2e75ce 100%);
  background-image: -o-linear-gradient(top, #52b6ec 0%, #2e75ce 100%);
  background-image: linear-gradient(top, #52b6ec 0%, #2e75ce 100%);
    
}
.button:hover {
  text-decoration: none;
  border-color: #377cae #175a9c #0c4893;
  box-shadow: 0 1px 1px rgba(255, 255, 255, 0.2) inset, 0 1px 1px rgba(5, 64, 140, 0.2);
  
  background-color: #4fa6e4;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF4FA6E4', endColorstr='#FF1462C4');
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #4fa6e4), color-stop(100%, #1462c4));
  background-image: -webkit-linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
  background-image: -moz-linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
  background-image: -o-linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
  background-image: linear-gradient(top, #4fa6e4 0%, #1462c4 100%);
}
.button:active {
  border-color: #094b84 #094b84 #0f4585;
  box-shadow: 0 1px 1px rgba(241, 243, 247, 0.2), 0 0 20px rgba(0, 0, 0, 0.5) inset;
  
  background-color: #1c7ec9;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF1C7EC9', endColorstr='#FF2395D9');
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #1c7ec9), color-stop(100%, #2395d9));
  background-image: -webkit-linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
  background-image: -moz-linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
  background-image: -o-linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
  background-image: linear-gradient(top, #1c7ec9 0%, #2395d9 100%);
}
.pading
{
  padding-left: 30%;
   padding-right: 30%;

}
.mybike{
  border-style:solid;
  padding-top:5%;
  border-spacing: 20px;
  padding-bottom:5%;
  font-size: larger;


}
.profile{
  padding-left:8%;
}

</style>
<!-- <script type="text/javascript">
	     function getComment(bid) {
    //noConflict();
    //console.log()
        var f=document.getElementById('sid_'+bid).value;
         var g=document.getElementById('c').value;
         
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "comment.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            sid:f,
            com:g
        },
      success: function(data){
        $("#comment").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});

      

       }
        function loadComment(bid) {
    //noConflict();
    //console.log()
        var f=document.getElementById('sid_'+bid).value;
         //var g=document.getElementById('c').value;
        //var m=document.getElementById('msg').value;
        //console.log(f)
        //console.log(m)
    $.ajax({url: "viewcomment.php",
    type: 'POST',
        //dataType: "json",
        data:{
            
            sid:f
            //com:g
        },
      success: function(data){
        $("#comment").html(data);
        
          console.log("inside success")
        },
        error: function(errorMessage){
          console.log(errorMessage)
        }});

      

       }
</script> -->
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <!-- menu -->
      <div id="toggle_m_nav">
        <div id="m_nav_menu" class="m_nav">
        <div class="m_nav_ham" id="m_ham_1"></div>
        <div class="m_nav_ham" id="m_ham_2"></div>
        <div class="m_nav_ham" id="m_ham_3"></div>
        </div>
      </div>

       <div id="m_nav_container" class="m_nav">
       <?php 
        include"header.php";
        ?>
      </div>
    <!-- menu -->
    <div class="container">
      <div class="agile-left">
        
      </div>
      <!-- wthree-top-grid -->
      <div class="wthree-top-grid">
        <h1><a href="">AMIGO RIDERS</a></h1>
        <div class="w3-agileits-border"> </div>
        <h2>Comments</h2>
      </div>
      <!-- //wthree-top-grid -->
    </div>
  </div>
<br><br>
<div class="pading">
  <!-- <form action="filter.php" method="POST">
  <input type="number" min="10000" name="filter" placeholder="filter by amount" required=""><input type="submit" value="filter">
</form> -->
</div>
  <?php
include "dbconn.php";
$sql="SELECT * FROM selling a,u_r_reg b where a.email=b.email and a.admin_s='y' order by a.selling_id DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
       $photo='../profile/'.$row["photo"];
         $bid=$row["selling_id"];
          $bname=$row["bike_name"];
           $bphoto='../rider/Bike Selling Form/'.$row["bphoto"];
           $email=$row["email"];
            //$lphoto='../rider/Bike Selling Form/'.$row["license_photo"];
             //$rphoto='../rider/Bike Selling Form/'.$row["rcbook_photo"];
              //$no=$row["no_of_person"];
          //      $description=$row["features"];
               $price=$row["price"];
          //      $bnumber=$row["bikenumber"];
           $name=$row["name"];
          // $email=$row["email"];
          // $ph=$row["phone"];
          
                   
              ?>
         

         

<br><br>
<div class="pading">
  <div class="mybike">
    
<div class="profile">
<img class="p"  src="<?php echo  $photo; ?>" alt="" width="150" height="150"/>
                    <?php echo $name ?></div><br>
                    <center>
                    <?php echo "<img src='$bphoto' alt='' width='500' height='300'>"; ?></center><br>
                    <div class="profile">
                      <?php echo $bname ?><br>
                    <?php echo $price ?> Rs<br>
                    <?php
                      $sql4="SELECT * FROM comment a,u_r_reg b where sell_id='$bid'and a.email=b.email and admin_s='0'";
          $result1=mysqli_query($conn,$sql4);
          if(mysqli_num_rows($result1) > 0)
          {
            while($row1=mysqli_fetch_assoc($result1))
            {
              $photo1='../profile/'.$row1["photo"];
              $com=$row1["content"];
              $name1=$row1["name"];
              $cid=$row1["item_id"];  
              ?>
                     <h2> 
                      <img class="p"  src="<?php echo  $photo1; ?>" alt="" width="100" height="100"/><?php echo $name1 ?>:<?php echo $com ?></h2><br>

                       <button><a href="approvecomment.php?id=<?php echo $cid ?>"><i  aria-hidden="true"></i>Approve Now</a></button>


                      <button><a href="deletecomment.php?id=<?php echo $cid ?>"><i  aria-hidden="true"></i> Delete Now</a></button>
                   
                    <?php
                           }
}

?>
    <!-- <?php   echo "<h3>License:</h3><img src='$lphoto' alt='' width='400' height='300'>";?>
    <?php echo "<h3>RCbook:</h3><img src='$rphoto' alt='' width='400' height='300'>"; ?> -->
                    
                  <!--   <a href="buybikes.php?bid=<?php echo $bid ?>">Read more</a> --></div>
                 </div></div><br><br>
                    <?php
                    }
}
else{
  echo "<center><h1>No Sellings Found</h1></center>";
}
?>

                  </body>
                  </html>
                  