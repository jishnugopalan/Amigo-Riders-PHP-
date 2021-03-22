
<?php
include "dbconn.php";
$servername="localhost";
$username="root";
$password="";
$dbname="amigo";
$a=$_POST["Name"];
$b=$_POST["dob"];
$c=$_POST["gender"];
$d=$_POST["house"];
$e=$_POST["street"];
$f=$_POST["dis"];
$g=$_POST["state"];
$h=$_POST["pin"];
$i=$_POST["country"];
$j=$_POST["ph"];
$k=$_POST["email"];
$l=$_POST["Password"];
$m=$_POST["Conpassword"];
$n=$_POST["ans1"];
$o=$_POST["ans2"];
$p=$_POST["ans3"];
// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . mysqli_connect_error());
// }





$sql = "INSERT INTO u_r_reg(name,gender,dob,house,street,district,state,pincode,country,phone,email)VALUES('$a','$c','$b','$d','$e','$f','$g',$h,'$i','$j','$k')";

if (mysqli_query($conn, $sql)) {
    echo "";

    $sql2= "INSERT into login(user_type,email,password,qanswer1,qanswer2,qanswer3)values('1','$k','$m','$n','$o','$p')";
    
    if (mysqli_query($conn, $sql2)) {
        session_start();
        $_SESSION["email"]=$k;
        $_SESSION["user"]=1;
    header('location:../../user/index.php');
} else {
   header('location:error/index.php');
}
} else {
   header('location:error/index.php');
}

		



/*$sql2 = "SELECT * FROM u_r_reg where urid='$s'";
$result = mysqli_query($conn, $sql2);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["urid"]. " - Name: " . $row["name"]. " " . $row["dob"]. "<br>";
    }
} else {
    echo "0 results";
}
*/
mysqli_close($conn);
?>
