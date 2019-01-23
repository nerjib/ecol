<?php
//coneccting to database
session_start();
$schuname=$_SESSION['uname'];
$tuname=$_POST['uname'];
$pword=$_POST['pword'];
$sex=$_POST['sex'];
$sname=$_POST['sname'];
$fname=$_POST['fname'];
$oname=$_POST['oname'];
$qual=$_POST['qual'];
$address=$_POST['address'];
$acttype="teacher";
$schname="alpha beta";
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());


//iserting new user into the database
$strSQL="INSERT INTO users(accttype,uname,password,fname,lname,oname,address,schname,schuname,sex,qualification) VALUES('$acttype','$tuname','$pword','$fname','$sname','$oname','$address','$schname','$schuname','$sex','$qual')";
mysqli_query($db,$strSQL) or die("username exist");
//mysqli_close($db);


$tname=$fname. " ".$sname." ".$oname;
$strSQL="INSERT INTO $schuname(name,accttype,teachuname) VALUES('$tname','$acttype','$tuname')";
mysqli_query($db,$strSQL) or die("username exist");
	
header("location:teachers.php");
echo "account created ";

?>
<html><body>
<a href="logintutorna.php">login here</a>
</body></html>