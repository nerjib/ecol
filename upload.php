<?php

$upload=$_FILES["file1"]["name"];
echo $upload;
 $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());

//iserting new user into the database
$strSQL="UPDATE users ". "SET p_pic=$upload ". "WHERE uname='mms1' ";
mysqli_query($db,$strSQL) or die("error");
mysqli_close($db);

?>