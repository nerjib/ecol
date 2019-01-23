<?php 
session_start();
$uname=$_SESSION['uname'];
$sub=$_POST['tsub'];
$class=$_POST['tclass'];
$teacher=$_POST['tteacher'];

//echo "$teacher has been assign to handle $sub in $class";
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());

//iserting new user into the database
$strSQL="UPDATE $uname  SET teachuname='$teacher' WHERE class='$class' && name='$sub'";
mysqli_query($db,$strSQL) or die("username exist");
header("location:addsub.php")
?>