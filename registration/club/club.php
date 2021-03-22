<?php
$servername="localhost";
$username="root";
$password="";
$dbname="amigo";
$a=$_POST["name1"];
$b=$_POST["crid"];
$c=$_POST["cowner"];
$d=$_POST["place"];
$q=$_POST["date"];
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
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . mysqli_connect_error());
}





$sql = "INSERT INTO club_reg(clubname,club_reg_id,ownership,issued_date,current_place,street,district,state,pincode,country,phone,email)VALUES('$a','$b','$c','$q','$d','$e','$f','$g',$h,'$i',$j,'$k')";

if (mysqli_query($conn, $sql)) {
    //echo "";
    $sql2= "INSERT into login(user_type,email,password,qanswer1,qanswer2,qanswer3)values('3','$k','$m','$n','$o','$p')";
	
	if (mysqli_query($conn, $sql2)) {
		session_start();
        $_SESSION["email"]=$k;
        $_SESSION["user"]=3;
    header('location:../../club/index.php');
} else {
    header('location:error/index.php');
}
} else {
    header('location:error/index.php');
}

		


mysqli_close($conn);
?>
