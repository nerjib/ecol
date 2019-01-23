<?php 
//$subject=$_POST['subject'] ;
session_start();
$uname=$_SESSION['uname'];
$schuname=$_POST['schuname'];
$admno=$_POST['admno'];
//$acttype="subject";


$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
$strSql="SELECT * FROM $schuname WHERE teachuname='$admno' && accttype='student'";
$rs=mysqli_query($db,$strSql) or die(header("location:accountactivation.php"));
if($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
	$class=$row['class'];
	echo "im in";
							//collect school name
									$strSql1="SELECT * FROM users WHERE uname='$schuname' && accttype='sch'";
								$rs1=mysqli_query($db,$strSql1) or die(header("location:accountactivation.php"));
								if($row1=mysqli_fetch_array($rs1)){
									$schname=$row1['schname'];									
								}
								
								
			
	$strSql2="UPDATE users SET admno='$admno', activation='1', schuname='$schuname',class='$class',schname='$schname',fname='$name' WHERE uname='$uname' && accttype='student'";
	mysqli_query($db,$strSql2);
	$_SESSION['schuname']=$schuname;
header("location:studentdashboard.php");
	
}
else
{
	header("location:accountactivation.php");
}



?>