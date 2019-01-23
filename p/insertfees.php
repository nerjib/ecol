<?php 
session_start();
$uname=$_SESSION['uname'];
$paytype=$_POST['paytype'];
$class=$_POST['payclass'];
$otherpay=$_POST['otherpay'];
$amount=$_POST['amount'];

if ($paytype=="otherfee"){
	
	$payname=$otherpay;
}
else{
	 $payname=$paytype;
}
//echo $payname;
//echo "$teacher has been assign to handle $sub in $class";
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
$strSQL="INSERT INTO $uname(accttype,class,name,total) VALUES('payment','$class','$payname','$amount')";
mysqli_query($db,$strSQL) or die("username exist");
header("location:schfees.php")
?>

