  <?php
   session_start();
 $tuname=$_POST['classcord'];
 $schuname=$_SESSION['uname'];

$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
$strSQL="DELETE FROM $schuname WHERE accttype='teacher' && teachuname='$tuname'";
mysqli_query($db,$strSQL) or die("username exist");
$strSQL1="DELETE FROM users WHERE accttype='teacher' && uname='$tuname'";
mysqli_query($db,$strSQL1) or die("username exist");

header("location:teachers.php");



?>