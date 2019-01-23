<?php 
session_start();
$uname=$_SESSION['uname'];
//$paytype=$_POST['paytype'];
//$class=$_POST['payclass'];
//$otherpay=$_POST['otherpay'];
//$amount=$_POST['amount'];
$id=$_POST['id'];
//if ($paytype=="otherfee"){
	
	//$payname=$otherpay;
//}
//else{
	// $payname=$paytype;
//}
//echo $id;
//echo "$teacher has been assign to handle $sub in $class";
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
//$strSQL="INSERT INTO $uname(accttype,class,name,total) VALUES('payment','$class','$payname','$amount')";
//mysqli_query($db,$strSQL) or die("username exist");
//header("location:schfees.php")

$strsql="DELETE  FROM $uname WHERE accttype='payment'&& id='$id'"or die("mysqli_error($db)");
$rs=mysqli_query($db,$strsql);
header("location:schfees.php")
		?>




