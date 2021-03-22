<?php
$s=$_POST["sdate"];
$e=$_POST["edate"];

$x=strtotime($s);
$y=strtotime($e);
if($y-$x<0)
	echo"<label><font color='red'>*Trip ending date should be less than starting date</font></label>";
else
	echo""
?>
