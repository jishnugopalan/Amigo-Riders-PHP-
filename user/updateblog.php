<?php
include"dbconn.php";
session_start();
$id=$_SESSION["email"];
    if(isset($_POST["update"])){

       
        $bid=$_POST["bid"];
        $a = $_POST["head"];
        $b = $_POST["blog"];
       
                
                $sql = "UPDATE blog SET blog_header='$a',blog_content='$b' where blog_id='$bid' and email='$id'";
                       

                if(mysqli_query($conn,$sql)){
                      

                      ?>
        <script type="text/javascript">
            alert("Blog updated successfully");
            window.location="blog/blogs/blogupdate.php";
        </script>
        <?php
                    //header("Location:../index.php");
                    //echo "upoaded";
                }
                else{

                    echo "ERROR".mysqli_error($conn);
                }

}
else if(isset($_POST["delete"]))
{
    
        $bid=$_POST["bid"];
        $sql="DELETE FROM blog where blog_id='$bid' and email='$id'";
        if(mysqli_query($conn,$sql)){
             $sql2="DELETE FROM likes where item_id='$bid'";
    if(mysqli_query($conn,$sql2))
    {
    $sql3="DELETE FROM comment where sell_id='$bid'";   
    if(mysqli_query($conn,$sql3))
    {
         
                      ?>
        <script type="text/javascript">
            alert("Your blog deleted successfully");
            window.location="blog/blogs/blogupdate.php";
        </script>
        <?php
                
                }
                }    
                }
                else{

                    echo "ERROR".mysqli_error($conn);
                }


  }


        
?>
