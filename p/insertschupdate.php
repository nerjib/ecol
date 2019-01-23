<?php
//coneccting to database
session_start();
$schuname=$_SESSION['uname'];
$motto=$_POST['motto'];
$session=$_POST['session'];
$term=$_POST['term'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
  

$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());


//iserting new user into the database
$strSQL="UPDATE users SET motto='$motto', mail='$mail',term='$term', year='$session',address='$address', phone_no='$phone' WHERE uname='$schuname'";
mysqli_query($db,$strSQL) or die("username exist");
//mysqli_close($db);


//UPDATE `users` SET `id`=[value-1],`uname`=[value-2],`admno`=[value-3],`year`=[value-4],`term`=[value-5],`phone_no`=[value-6],`schname`=[value-7],`motto`=[value-8],`password`=[value-9],`accttype`=[value-10],`lname`=[value-11],`fname`=[value-12],`oname`=[value-13],`sex`=[value-14],
//`address`=[value-15],`mail`=[value-16],`schuname`=[value-17],`class`=[value-18],`qualification`=[value-19],`p_pic`=[value-20],`activation`=[value-21] WHERE 1

header("location:schprofile.php");
echo "account created ";

?>
<html><body>
<a href="logintutorna.php">login here</a>
</body></html>