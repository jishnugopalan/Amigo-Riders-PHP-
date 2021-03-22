<?php
session_start();
$id=$_SESSION["email"];
$pass=$_POST["pass"];

//echo $email;
include_once('dbconn.php');
$result = mysqli_query ($conn , "SELECT * FROM amigo.login WHERE email = '".$id."'");
if(mysqli_num_rows($result) >0)
{
//echo $rows;
while($row=mysqli_fetch_assoc($result)) {
    	$password=$row["password"];


	} 
}
if($pass!=$password)
{
	echo"<font color='red'>password invalid</font>";
}
else
{
	?>
	<font color="white">New password:</font><br><input type="text"  name="pass1" pattern="{8,}" autocomplete="off" id="npass" required=""><br>
	<font color="white">Re-enter new password:</font><br><input type="text"  name="pass2" pattern="{8,}" autocomplete="off" id="npass1" required=""><br>
	<br><input type="submit" onClick="return validateForm()">
<?php
}

	?>




					