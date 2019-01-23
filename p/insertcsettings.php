<?php
//coneccting to database
$cname=$_POST['cname'];
$title=$_POST['title'];
$cteacher=$_POST['cteacher'];
$classname=$cname." ".$title;
session_start();
$uname=$_SESSION['uname'];
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());



if(isset($_POST['nclasscord'])){
$nclasscord=$_POST['nclasscord'];
if(isset($_POST['nclasscord'])){
$classcord=$_POST['classcord'];
$strSQL="UPDATE $uname SET teachuname='$classcord' WHERE class='$nclasscord' && accttype='class'";
mysqli_query($db,$strSQL) or die(mysqli_error($db));

}
}
else{


$accttype="class";


//iserting new user into the database
$strSQL="INSERT INTO $uname(class,name,accttype,teachuname) VALUES('$cname','$classname','$accttype','$cteacher')";
mysqli_query($db,$strSQL) or die(mysqli_error($db));
mysqli_close($db);
}
	
header("location:csettings.php");
echo "account created ";

?>
<html><body>
<a href="logintutorna.php">login here</a>
</body></html>