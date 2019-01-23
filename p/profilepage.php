<?php 
session_start();
session_start();
$uname=$_SESSION['uname'];
$filename1 = "pp.php"; 
$file1 = fopen( $filename1, "r" ); 

$filesize1 = filesize( $filename1 ); 
$filetext1 = fread( $file1, $filesize1 ); 
 
//echo ( "$filetext1" ); 

fclose( $file1 ); 

mkdir("/xampp/htdocs/ecol/$uname",0777);

$filename ="/xampp/htdocs/ecol/$uname/index.php"; 
$file = fopen( $filename, "w" ); 

fwrite( $file, "$filetext1" ); 
fclose( $file ); 
header("location:index.php");

//header("location:/ecol/$uname");
?> 