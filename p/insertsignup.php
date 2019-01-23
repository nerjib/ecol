<?php
//coneccting to database
$phone=$_POST['phone_no'];
$uname=$_POST['uname'];
$pword=$_POST['pword'];
$acttype=$_POST['acttype'];
$schname=$_POST['schname'];
$schnstate=$_POST['schstate'];
$schlga=$_POST['schlga'];
$schtown=$_POST['schtwn'];

$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
if( $acttype=="sch"	)
		{
	$stsql="CREATE TABLE $uname(".
"id INT NOT NULL AUTO_INCREMENT,
class varchar(30) NOT NULL,
name varchar(30) NOT NULL,
accttype VARCHAR(30) NOT NULL,
teachuname varchar(30) NOT NULL,
total varchar(30) NOT NULL,
primary key (id));"  or die(mysqli_error($db));
mysqli_query($db,$stsql);
	
}
//else{

//$stsql="CREATE TABLE $uname(".
//"accttype varchar(30) NOT NULL,
//score VARCHAR(2) NOT NULL);"  or die(mysqli_error($db));
//mysqli_query($db,$stsql);

//}

//iserting new user into the database
$strSQL="INSERT INTO users(phone_no,uname,schname,password,accttype) VALUES('$phone','$uname','$schname','$pword','$acttype')";
mysqli_query($db,$strSQL) or die("user Exist" .$acttype);
mysqli_close($db);
session_start();
$_SESSION['uname']=$uname;
$_SESSION['accttype']=$acttype;
$_SESSION['class']="";
$_SESSION['class1']="";
$_SESSION['class2']="";
$_SESSION['sname2']="";
$_SESSION['sname1']="";
	
if ($acttype=="sch")
{
	header("location:schprofile.php");
}
else
{	
header("location:index.php");
echo "account created ";
}
?>
<html><body>
<a href="logintutorna.php">login here</a>
</body></html>