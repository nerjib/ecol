<?php
session_start();
$myusername=$_SESSION['uname'];

if (isset($_POST['purchase'])){

$topic=$_POST['purchase'];
}
else{
	
	
	$topic=$_POST['freeadd'];
}
	
$topic=$_POST['purchase'];
echo $topic;

$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());

$tsql="SELECT price FROM subject WHERE topic='$topic'"or die("mysqli_error()");
$trs=mysqli_query($db,$tsql);
while ($trow=mysqli_fetch_array($trs)){

		if ( $trow['price']=="free"){
		$price=0;
}
		else{
		
		$price=$trow['price'];

}
}


$csql="SELECT credit FROM users WHERE uname='$myusername'"or die("mysqli_error()");
$crs=mysqli_query($db,$csql);
while ($crow=mysqli_fetch_array($crs)){

if ($crow['credit']<$price){
?>
<html>
<body style="width:40%">
<?php
echo "insufficient fund";


}
else{

$bal=(($crow['credit'] - $price));
					
$bSQL="UPDATE users SET credit='$bal' WHERE uname='$myusername'";
mysqli_query($db,$bSQL) or die(mysqli_error($db));

$strSQL="INSERT INTO $myusername(mytopic) VALUES('$topic')";
mysqli_query($db,$strSQL) or die(header("location:availabletopics.php"));
header("location:availabletopics.php");



mysqli_close($db);

}
}
?>
</body>
</html>