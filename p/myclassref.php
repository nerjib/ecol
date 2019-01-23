<?php
session_start();
$m_class=$_POST['class1'];
$_SESSION['class1']=$m_class;

header("location:myclass.php")

?>