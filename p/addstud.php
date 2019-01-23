<?php
//coneccting to database
$admno=$_POST['admno'];
$class=$_POST['class'];
$sex=$_POST['sex'];
$sname=$_POST['sname'];
$fname=$_POST['fname'];
$oname=$_POST['oname'];
$address=$_POST['address'];
//$acttype=$_POST['stud'];
session_start();
$uname=$_SESSION['uname'];
$stname=$fname." ".$sname." ".$oname;
$acctype="student";

$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());


//iserting new student into the database
$strSQL="INSERT INTO usersch(schuser,fname,lname,oname,address,schname,sex,admno,class) VALUES('$uname','$fname','$sname','$oname','$address','$schname','$sex','$admno','$class')";
mysqli_query($db,$strSQL) or die(mysqli_error($db));
//mysqli_close($db);
$strSQL2="INSERT INTO $uname(class,name,accttype,teachuname) VALUES('$class','$stname','$acctype','$admno')";
mysqli_query($db,$strSQL2) or die(mysqli_error($db));


$strsql1="SELECT * FROM $uname WHERE accttype='class' && name='$class'"or die("mysqli_error($db)");
$rs1=mysqli_query($db,$strsql1)or die("mysqli_error($db)");
while($row1=mysqli_fetch_array($rs1)){
$total=$row1['total'];

$total=$total + 1;

$strSQL2="UPDATE $uname SET total='$total' WHERE name='$class'";
mysqli_query($db,$strSQL2) or die(mysqli_error($db));
//mysqli_close($db);

		;
	
}
header("location:student.php");
echo $class." account created ".$total;

?>