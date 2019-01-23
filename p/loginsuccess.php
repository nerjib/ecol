<?php
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());


  if( isset($_COOKIE["uname"])){
	  
 $uname=$_COOKIE["uname"];
 $pass=$_COOKIE["pass"];
 $strsql="SELECT * FROM users WHERE uname='$uname' && password='$pass'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	session_start();
	$_SESSION['uname']=$row['uname'];
	$_SESSION['schuname']=$row['schuname'];
	$_SESSION['accttype']=$row['accttype'];
	$_SESSION['class']="";
	$_SESSION['class2']="";
	$_SESSION['activation']=$row['activation'];
$_SESSION['sname2']="";
$_SESSION['class1']=$row['class'];
	$accttype=$row['accttype'];
	$uname=$row['uname'];
	setcookie("uname", "$uname", time()+2592000, "/","", 0);
	setcookie("accttype", "$accttype", time()+2592000, "/","", 0);

	
	header("location:index.php");
 
 }
  }
  
 else{
 $uname=$_POST['uname'];
 $pass=$_POST['pword'];


$strsql="SELECT * FROM users WHERE uname='$uname' && password='$pass'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	session_start();
	$_SESSION['uname']=$row['uname'];
	$_SESSION['schuname']=$row['schuname'];
	$_SESSION['accttype']=$row['accttype'];
	$_SESSION['activation']=$row['activation'];

	$_SESSION['class2']="";
$_SESSION['sname2']="";
	$_SESSION['class']="";
	$_SESSION['class1']=$row['class'];
	$accttype=$row['accttype'];
	$uname=$row['uname'];
	setcookie("uname", "$uname", time()+2592000, "/","", 0);
	setcookie("accttype", "$accttype", time()+2592000, "/","", 0);
	setcookie("pass", "$pass", time()+2592000, "/","", 0);
	header("location:index.php");
}

echo("check usename or password");
 }
?>

<br/>
<div align="center">
<a href="logout.php"> Retry Login </a> 
dont Have account <a href="signup.php"> sign up here </a> 
</div>