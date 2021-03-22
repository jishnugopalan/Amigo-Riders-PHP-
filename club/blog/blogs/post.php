<?php
session_start();
include"dbconn.php";
$id=$_SESSION["email"];
$rid = $_POST['bid'];
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

          $sql5="SELECT * FROM blog where blog_id='$rid'";
$result=mysqli_query($conn,$sql5);
          if(mysqli_num_rows($result) > 0)
          {
               while($row=mysqli_fetch_assoc($result))

               {
                    $d=$row["blog_header"];
               }
          }

$sql="SELECT * FROM likes where item_id='$rid' and email='$id' and item_name='blog'";
$result=mysqli_query($conn,$sql);
$rows = mysqli_num_rows($result);
//echo $rows;
if($rows > 0 )
{

      $sql2="DELETE FROM likes where item_id='$rid' and email='$id' and item_name='blog'";
      if(mysqli_query($conn,$sql2))
      {
       echo "<font color='red'>you disliked this blog</font>";
      }
}
else{
     $sql1="INSERT INTO likes(item_id,item_name,like_count,email,ldatetime)values('$rid','blog','1','$id',NOW())";
     if(mysqli_query($conn,$sql1))
{



 $sql4="INSERT INTO notification(email,header,body,ndate,item_id,ntype,nname)values('$e','$cname','Liked your blog',NOW(),'$rid','blike','$d')";
                if(mysqli_query($conn,$sql4))
                {
                  
                    
                }



echo "<font color='green'>you liked this blog</font>";
}


}
?>