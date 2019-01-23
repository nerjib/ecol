
<?php
$topic=$_POST['topic'];
$sub=$_POST['sub'];
$tutor=$_POST['tutor'];
$price=$_POST['price'];

$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());
//$strsql="CREATE TABLE  $(".
//"userid INT(11) NOT NULL);"  or die("mysqli_error()");
//mysqli_query($db,$strsql);



$stSQL="INSERT INTO subject(topic, subject, tutor, price) VALUES('$topic','$sub','$tutor','$price')";
mysqli_query($db,$stSQL) or die("Error: ".mysqli_error($db));;
mysqli_close($db);
header("location:admina.php");


?>