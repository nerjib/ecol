<?php 
session_start();
$_SESSION['nam']="you";
$filename1 = "fo.php"; 
$file1 = fopen( $filename1, "r+" ); 

$filesize1 = filesize( $filename1 ); 
$filetext1 = fread( $file1, $filesize1 ); 
 
fclose( $file1 ); 
 

echo ( "$filetext1" ); 



$data="<html><body><table><tr><td>yy</td><td>hi</td></tr></table>
</body></html>";

$filename = "me.php"; 
$file = fopen( $filename, "w" ); 

fwrite( $file, "$filetext1" ); 
fclose( $file ); 
session_destroy();
header("location:me.php");
?> 