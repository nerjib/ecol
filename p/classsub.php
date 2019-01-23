<?php
session_start();
$m_class=$_GET['class1'];
$_SESSION['class1']=$m_class;

header("location:classes.php")

?>