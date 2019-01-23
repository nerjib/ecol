
<?php

session_start();

if (isset($_SESSION['uname'])){
$myusername=$_SESSION['uname'] ;
$topic=$_SESSION['topic'];
$coment=$_POST['mycoment'];
	



$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());
$stSQL="INSERT INTO discuss(name, coment, topic) VALUES('$myusername','$coment','$topic')";
mysqli_query($db,$stSQL) or die("Error: ".mysqli_error($db));;
mysqli_close($db);

header("location:discussion.php");
echo "account created ";
}
?>