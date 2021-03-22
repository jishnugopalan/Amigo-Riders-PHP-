<?php
include "dbconn.php";
$a=$_POST["name1"];
$b=$_POST["Text"];
$c=$_POST["selector1"];
$d=$_POST["house"];
$e=$_POST["street"];
$f=$_POST["dis"];
$g=$_POST["state"];
$h=$_POST["pin"];
$i=$_POST["country"];
$j=$_POST["ph"];
$k=$_POST["email"];
$l=$_POST["pass"];
$m=$_POST["pass1"];
$n=$_POST["ans1"];
$o=$_POST["ans2"];
$p=$_POST["ans3"];
$q=$_POST["work"];
$r=$_POST["exp"];

// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
 //   die("Connection failed: " . mysqli_connect_error());
//}





$sql = "INSERT INTO u_r_reg(name,gender,dob,house,street,district,state,pincode,country,phone,email)VALUES('$a','$c','$b','$d','$e','$f','$g',$h,'$i','$j','$k')";

if (mysqli_query($conn, $sql)) {

	$sql2= "INSERT into login(user_type,email,password,qanswer1,qanswer2,qanswer3)values('2','$k','$m','$n','$o','$p')";
	
	if (mysqli_query($conn, $sql2)) {
    echo "";
    $sql2= "INSERT into riderinfo(email,work_at,expertised_in)values('$k','$q','$r')";
	
	if (mysqli_query($conn, $sql2)) {
		session_start();
        $_SESSION["email"]=$k;
         $_SESSION["user"]=2;
    header('location:../../rider/index.php');
}
else {
     header('location:error/index.php');
}
} else {
     header('location:error/index.php');
}
    
} else {
    header('location:error/index.php');
}

		


mysqli_close($conn);
?>
