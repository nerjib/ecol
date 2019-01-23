<?php
session_start();
session_destroy();
setcookie("accttype", "", time()-3600, "/","", 0);
 setcookie("pass", "", time()-3600, "/","", 0);
 setcookie("uname", "", time()-3600, "/","", 0);

header("location:loginecole.php");





?>