<?php
session_start();
$uname=$_SESSION['uname'];
$score=$_SESSION['score'];

echo $score;
//$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());

//iserting new user into the database
//$strSQL="INSERT INTO $uname(score) VALUES('$score')";
//mysqli_query($db,$strSQL) or die("user Exist");
//mysqli_close($db);



?>