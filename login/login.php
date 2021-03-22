

<?php
include "dbconn.php";
session_start();
$_SESSION["user"]='0';
$email=$_POST["Name"];
$pass=$_POST["Password"];
$_SESSION["email"]=$email;
$_SESSION["pass"]=$pass;




$sql="SELECT * FROM login where email='$email' and password='$pass'";
$result=mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0){
 
   while($row=$result->fetch_assoc()){
		$_SESSION["email"]=$row["email"];
		$_SESSION["user"]=$row["user_type"];


	
}
$sql1="UPDATE login SET online='1' where email='$email'";
if(mysqli_query($conn,$sql1))
{

}
} 
else {
    echo "";
   // header('location:logout.php');


}

if($_SESSION["email"]=='admin' && $_SESSION["pass"]=='admin'){
	//echo"admin login";
	header('location:../admin/index.php');
}


else if($_SESSION["user"]==1){
	header('location:../user/index.php');
exit;

    /*echo "<br><a href='./web/h.php'>header</a><br>";
	echo "<br><a href='./blog/web/index.html'>Blog</a><br>";
	echo "<a href='./Image upload/upload.php'>Upload image</a><br>";
	echo "<a href='./Upload Video/index.php'>Upload Video</a><br>";*/
	
}
else if($_SESSION["user"]==2){
//$second=1;

header('location:../rider/index.php');
exit;
	/*echo "<br><a href='./blog/web/index.html'>Blog</a><br>";	
	echo "<a href='./Trip Create Form/web/index.html'>Trip</a><br>";
	echo "<a href='./Image upload/upload.php'>Upload image</a><br>";
	echo "<a href='./Upload Video/index.php'>Upload Video</a><br>";*/
}
else if($_SESSION["user"]==3){

		header('location:../club/index.php');
exit;
	/*echo "<br><a href='./blog/web/index.html'>Blog</a><br>";
	echo "<a href='./event/web/index.html'>Event</a><br>";	
	echo "<a href='./Image upload/upload.php'>Upload image</a><br>";
	echo "<a href='./Upload Video/index.php'>Upload Video</a><br>";*/

}

else{
session_destroy();
	//echo "<a href='index.html'>Login</a>";
	header('location:error/index.php');
}



?>