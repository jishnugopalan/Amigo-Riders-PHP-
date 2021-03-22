<?php
include"dbconn.php";
session_start();
    if(isset($_POST["submit"])){

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
        $a = $_POST["bikename"];
        $b = $_POST["bikenumber"];
        $c = $_POST["amount"];
        $d= $_POST["status"];
        
          $e= $_POST["features"];

        $target_dir_rcbook = "uploads/";
        $target_file_rcbook = $target_dir_rcbook . basename($_FILES["rcbookcopy"]["name"]);
        $imageFileType_rcbook = strtolower(pathinfo($target_file_rcbook,PATHINFO_EXTENSION));

        $target_dir_liscense = "uploads/";
        $target_file_liscense = $target_dir_liscense . basename($_FILES["liscensecopy"]["name"]);
        $imageFileType_liscense = strtolower(pathinfo($target_file_liscense,PATHINFO_EXTENSION));

        $target_dir_bike = "uploads/";
        $target_file_bike = $target_dir_bike . basename($_FILES["bike"]["name"]);
        $imageFileType_bike = strtolower(pathinfo($target_file_bike,PATHINFO_EXTENSION));

        if($imageFileType_rcbook != "jpg" && $imageFileType_rcbook != "png" && $imageFileType_rcbook != "jpeg" && 
            $imageFileType_liscense != "jpg" && $imageFileType_liscense != "png" && $imageFileType_liscense != "jpeg" && $imageFileType_bike != "jpg" && $imageFileType_bike != "png" && $imageFileType_bike != "jpeg" ){

           ?>
           <script type="text/javascript">
               alert("Please upload jpg format files");
               window.location="index.php";
           </script>
           <?php
        }
        else{

            if (move_uploaded_file($_FILES["rcbookcopy"]["tmp_name"], $target_file_rcbook) && move_uploaded_file($_FILES["liscensecopy"]["tmp_name"], $target_file_liscense) && move_uploaded_file($_FILES["bike"]["tmp_name"], $target_file_bike)) {
                
                $sql = "INSERT INTO selling(email,bike_name,license_photo,rcbook_photo,features,price,sdate,status,bphoto,bikenumber) 
                        VALUES('$id','$a','$target_file_liscense','$target_file_rcbook','$e','$c',NOW(),'$d','$target_file_bike','$b')";

                if(mysqli_query($conn,$sql)){
                      

                      ?>
        <script type="text/javascript">
            alert("Your selling uploaded successfully");
            window.location="../index.php";
        </script>
        <?php
                    //header("Location:../index.php");
                    //echo "upoaded";
                }
                else{

                    echo "ERROR".mysqli_error($conn);
                }

            } else {
                
                $uploaderror="Sorry, there was an error uploading your file.";
                //echo "no";
            }
            //echo "no";
        }
        //echo"no";
    }
?>
