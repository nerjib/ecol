
<table>
<tr><td>
<?php
session_start();

if (isset($_SESSION['uname'])){
$referrer=$_SESSION['uname'] ;
}
else{
	
	$referrer=" ";
}


$fafname=$_POST['fafname'];
$fafno=$_POST['fafno'];


$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());
$stSQL="INSERT INTO invitelist(name, phone, referrer) VALUES('$fafname','$fafno','$referrer')";
mysqli_query($db,$stSQL) or header("location:about.php");


mysqli_close($db);
echo "account created";
header("location:about.php");


?>
<html>
<body>
<input type="button" value="invite again">

</body>
</html>