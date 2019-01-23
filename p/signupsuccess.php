<?php
$phone_no=$_POST['phone_no'];
$pu_no=$_POST['pu_no'];
$pword=$_POST['pword'];
mysql_connect("localhost","root","");
mysql_select_db("citidev") or die(mysql_error());
$strSQL="INSERT INTO users(phone_no,pu_no,password) VALUES('$phone_no','$pu_no','$pword')";
mysql_query($strSQL) or die(mysql_error());
mysql_close;
?>