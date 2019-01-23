<?php
$phone=$_POST['phone_no'];
$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());

$strsql="SELECT * FROM users WHERE phone_no='$phone'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
if ($row=mysqli_fetch_array($rs)==0){
	session_start();
	$_SESSION['pwordr']="phone no does not exist pls check number and try again or register";
	header("location:passrecover.php");
}
else{


$strSQL="INSERT INTO passwordrecover(phone) VALUES('$phone')";
mysqli_query($db,$strSQL) or die(mysqli_error($db));
session_start();
$_SESSION['pwordr']="your password will be send to u shortly";
header("location:passrecover.php");
}
mysqli_close($db);





?>