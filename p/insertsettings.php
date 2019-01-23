<?php
//coneccting to database
$cname=$_POST['cname'];
$title=$_POST['title'];
$cteacher=$_POST['cteacher'];
$schname="alpha beta";
$schuser="sch";
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());


//iserting new user into the database
$strSQL="INSERT INTO class(name,schuname,teachuname,title) VALUES('$cname','$schuser','$cteacher','$title')";
mysqli_query($db,$strSQL) or die(mysqli_error($db));
mysqli_close($db);
session_start();
$_SESSION['uname']=$uname;

	
header("location:csettings.php");
echo "account created ";

?>
<html><body>
<a href="logintutorna.php">login here</a>
</body></html>