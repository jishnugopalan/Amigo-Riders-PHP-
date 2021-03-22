<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
// $sid=$_POST["sid"];
// $com=$_POST["com"];
//echo $sid;
$c=$_POST["com"];
$s=$_POST["sid"];
$e=$_POST["eid"];

$sql3="SELECT * FROM club_reg where email='$id'";
$result=mysqli_query($conn,$sql3);
          if(mysqli_num_rows($result) > 0)
          {
               while($row=mysqli_fetch_assoc($result))

               {
                    
                    if($id==$e)
                    {
                    	$cname='You';
                    }
                    else
                    {
                    	$cname=$row["clubname"];
                    }

               }
          }

          $sql5="SELECT * FROM blog where blog_id='$s'";
$result=mysqli_query($conn,$sql5);
          if(mysqli_num_rows($result) > 0)
          {
               while($row=mysqli_fetch_assoc($result))

               {
                    $d=$row["blog_header"];
               }
          }


if(empty($c))
{
	echo "<font color='red'>Please write a comment</font>";
}
else{


  $sql6="SELECT * FROM comment where sell_id='$s' and email='$id'";
  $result2=mysqli_query($conn,$sql6);
  $rows = mysqli_num_rows($result2);
//echo $rows;
if($rows > 0 )
{

      
       echo "<font color='red'>you are already commented on this blog</font>";
      
}
else
{

$sql="INSERT INTO comment(sell_id,content,cdate,email,ctype)values('$s','$c',NOW(),'$id','blog')";
if(mysqli_query($conn,$sql))
{

    
 
  // $sql2="SELECT * FROM comment where sell_id='$s'";
  // $result=mysqli_query($conn,$sql2);
  // if(mysqli_num_rows($result)>0)
  // {
  //  while($row=mysqli_fetch_assoc($result))
  //  {
      // $com=$row["content"];
      // echo $com;
      // //echo $sid;
      //echo "<br>";
   $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$e','$cname','Commented on your blog',NOW(),'$s','bcomment','$d')";
                if(mysqli_query($conn,$sql4))
                {
                  
                    
                }
                else
                  echo mysqli_error($conn);
  
  
      echo "<font color='green'>You commented this blog.Please refresh the page for see your comment</font>";
?>
<!-- <script type="text/javascript">
  alert("inserting");
  window.location="myblog.php";

</script> -->
<?php
  //  }
  // }

  

}
}
}
?>