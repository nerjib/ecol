<?php
session_start();
$_SESSION['sub']=$_POST['sub'];
header("location:availabletopics.php");



?>
