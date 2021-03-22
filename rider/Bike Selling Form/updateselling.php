<?php
include"dbconn.php";
session_start();
    if(isset($_POST["update"])){

        //$userid=$_SESSION['userid'];
        //$state = $_POST["state"];
        //$district = $_POST["district"];
        //$cityorvillage = $_POST["cityorvillage"];
        //$pincode = $_POST["pincode"];
        //$vehicletype = $_POST["vehicletype"];
        //$vehiclenumber = $_POST["vehiclenumber"];
        //$carriableweight=$_POST["carrieableweight"];
        //$rcbooknumber=$_POST["rcbooknumber"];
        //$accountnumber = $_POST["accountnumber"];
        //$ifsccode = $_POST["ifsccode"];
        //$liscensenumber=$_POST["liscensenumber"];
        $id=$_SESSION["email"];
        $sid=$_POST["sid"];
        $a = $_POST["bikename"];
        $b = $_POST["bikenumber"];
        $c = $_POST["amount"];
        //$d= $_POST["status"];
        
          $e= $_POST["features"];

        /*$target_dir_rcbook = "Bike Selling Form/uploads/";
        $target_file_rcbook = $target_dir_rcbook . basename($_FILES["rcbookcopy"]["name"]);
        $imageFileType_rcbook = strtolower(pathinfo($target_file_rcbook,PATHINFO_EXTENSION));

        $target_dir_liscense = "Bike Selling Form/uploads/";
        $target_file_liscense = $target_dir_liscense . basename($_FILES["liscensecopy"]["name"]);
        $imageFileType_liscense = strtolower(pathinfo($target_file_liscense,PATHINFO_EXTENSION));

        $target_dir_bike = "Bike Selling Form/uploads/";
        $target_file_bike = $target_dir_bike . basename($_FILES["bike"]["name"]);
        $imageFileType_bike = strtolower(pathinfo($target_file_bike,PATHINFO_EXTENSION));

        if($imageFileType_rcbook != "jpg" && $imageFileType_rcbook != "png" && $imageFileType_rcbook != "jpeg" && 
            $imageFileType_liscense != "jpg" && $imageFileType_liscense != "png" && $imageFileType_liscense != "jpeg" && $imageFileType_bike != "jpg" && $imageFileType_bike != "png" && $imageFileType_bike != "jpeg" ){

            $imgerror="Please upload a jpg or png file";
        echo "no";
        }
        else{

            if (move_uploaded_file($_FILES["rcbookcopy"]["tmp_name"], $target_file_rcbook) && move_uploaded_file($_FILES["liscensecopy"]["tmp_name"], $target_file_liscense) && move_uploaded_file($_FILES["bike"]["tmp_name"], $target_file_bike)) {*/
                
                $sql = "UPDATE selling SET bike_name='$a',features='$e',price='$c',bikenumber='$b',admin_s='n' where selling_id='$sid' and email='$id'";
                       

                if(mysqli_query($conn,$sql)){
                      

                      ?>
        <script type="text/javascript">
            alert("Your selling uploaded successfully. You need to wait for admin approval");
            window.location="../selling.php";
        </script>
        <?php
                    //header("Location:../index.php");
                    //echo "upoaded";
                }
                else{

                    echo "ERROR".mysqli_error($conn);
                }

}
if(isset($_POST["bphoto"]))
{
     $id=$_SESSION["email"];
        $sid=$_POST["sid"];
$target_dir_rcbook = "uploads/";
        $target_file_rcbook = $target_dir_rcbook . basename($_FILES["bike"]["name"]);
        $imageFileType_rcbook = strtolower(pathinfo($target_file_rcbook,PATHINFO_EXTENSION));
          if($imageFileType_rcbook != "jpg" && $imageFileType_rcbook != "png" && $imageFileType_rcbook != "jpeg"){

           ?>
           <script type="text/javascript">
               alert("Please upload jpg format files");
               window.location="../selling.php";
           </script>
           <?php
       }
       else
       {
  if (move_uploaded_file($_FILES["bike"]["tmp_name"], $target_file_rcbook)){

    $sql="UPDATE selling SET bphoto='$target_file_rcbook',admin_s='n' where selling_id='$sid' and email='$id'";
     if(mysqli_query($conn,$sql)){
             
         
                      ?>
        <script type="text/javascript">
            alert("Bike photo uploaded successfully. You need to wait for admin approval");
            window.location="../selling.php";
        </script>
        <?php
                    
                }
                else{

                    echo "ERROR".mysqli_error($conn);
                }


  }
}
}



if(isset($_POST["lphoto"]))
{
     $id=$_SESSION["email"];
        $sid=$_POST["sid"];
$target_dir_rcbook = "uploads/";
        $target_file_rcbook = $target_dir_rcbook . basename($_FILES["liscensecopy"]["name"]);
        $imageFileType_rcbook = strtolower(pathinfo($target_file_rcbook,PATHINFO_EXTENSION));
        if($imageFileType_rcbook != "jpg" && $imageFileType_rcbook != "png" && $imageFileType_rcbook != "jpeg"){

           ?>
           <script type="text/javascript">
               alert("Please upload jpg format files");
               window.location="../selling.php";
           </script>
           <?php
       }
       else
       {
  if (move_uploaded_file($_FILES["liscensecopy"]["tmp_name"], $target_file_rcbook)){

    $sql="UPDATE selling SET license_photo='$target_file_rcbook',admin_s='n' where selling_id='$sid' and email='$id'";
     if(mysqli_query($conn,$sql)){
             
         
                      ?>
        <script type="text/javascript">
            alert("license photo uploaded successfully. You need to wait for admin approval");
            window.location="../selling.php";
        </script>
        <?php
                    
                }
                else{

                    echo "ERROR".mysqli_error($conn);
                }


  }


}
}


if(isset($_POST["rphoto"]))
{
     $id=$_SESSION["email"];
        $sid=$_POST["sid"];
$target_dir_rcbook = "uploads/";
        $target_file_rcbook = $target_dir_rcbook . basename($_FILES["rcbookcopy"]["name"]);
        $imageFileType_rcbook = strtolower(pathinfo($target_file_rcbook,PATHINFO_EXTENSION));
        if($imageFileType_rcbook != "jpg" && $imageFileType_rcbook != "png" && $imageFileType_rcbook != "jpeg"){

           ?>
           <script type="text/javascript">
               alert("Please upload jpg format files");
               window.location="../selling.php";
           </script>
           <?php
       }
       else
       {
  if (move_uploaded_file($_FILES["rcbookcopy"]["tmp_name"], $target_file_rcbook)){

    $sql="UPDATE selling SET rcbook_photo='$target_file_rcbook',admin_s='n' where selling_id='$sid' and email='$id'";
     if(mysqli_query($conn,$sql)){
             
         
                      ?>
        <script type="text/javascript">
            alert("RC book photo uploaded successfully. You need to wait for admin approval");
            window.location="../selling.php";
        </script>
        <?php
                    
                }
                else{

                    echo "ERROR".mysqli_error($conn);
                }


  }

}
}


if(isset($_POST["delete"]))
{
  $id=$_SESSION["email"];
        $sid=$_POST["sid"];
        $sql="DELETE FROM selling where selling_id='$sid' and email='$id'";
        if(mysqli_query($conn,$sql)){
             
         
                      ?>
        <script type="text/javascript">
            alert("Your deleted the selling successfully");
            window.location="../selling.php";
        </script>
        <?php
                    
                }
                else{

                    echo "ERROR".mysqli_error($conn);
                }


  }



        
?>
