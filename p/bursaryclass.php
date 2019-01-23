<?php
session_start();
$mclass=$_GET['classsel'];
$_SESSION['class']=$mclass;

header("location:bursary.php")

?>