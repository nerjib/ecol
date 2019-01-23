<?php 
$subject=$_POST['subject'] ;
session_start();
$uname=$_SESSION['uname'];
$acttype="subject";

foreach($_POST['subclass'] as $class){



$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());

//iserting new subject into school database
$strSQL="INSERT INTO $uname(class,name,accttype) VALUES('$class','$subject','$acttype')";
mysqli_query($db,$strSQL) or die("username exist");
//mysqli_close($db);


//echo $slected ." are offerin ". $subject. "</br>";
}
header("location:addsub.php");
?>