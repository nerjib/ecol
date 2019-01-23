<?php 
//$subject=$_POST['subject'] ;
session_start();
$schuname=$_SESSION['schuname'];
$mclass=$_SESSION['class2'];
$sname=$_SESSION['sname2'];
//$mclass=$_SESSION['class1'];

$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 
 $strsql="SELECT * FROM users WHERE uname='$schuname'&& accttype='sch'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$term=$row['term'];
$session=$row['year'];
 
}
 
 
 
 if(isset($_POST['remov'])) { 

$remov=$_POST['remov'];
 $rstrsql="DELETE FROM assessment WHERE schuname='$schuname' && class='$mclass' && term='$term'&& type='$remov' && subject='$sname' && year='$session'"or die("mysqli_error()");
mysqli_query($db,$rstrsql);
echo "del";
 }
 else
 {
$id= $_POST['id'];	
$score=$_POST['score1'];
$type=$_POST['type'];

	for ($i=0; $i < count($id); $i++){
		
		 $s1trsql="SELECT * FROM assessment WHERE schuname='$schuname' && class='$mclass' && term='$term'&& type='$type' && subject='$sname' && year='$session' && admissionno='$id[$i]'"or die("mysqli_error()");
$r1s=mysqli_query($db,$s1trsql);
$score1=0;
($r1ow=mysqli_fetch_array($r1s));

//this will check if user deatils is there
if ($r1ow){
							//this will check if user detail is there but score is empty
											if ($r1ow['score']==""){
											$strSQL="UPDATE assessment SET score='$score[$i]' WHERE schuname='$schuname' && class='$mclass' && term='$term'&& type='$type' && subject='$sname' && year='$session' && admissionno='$id[$i]'";
											mysqli_query($db,$strSQL) or die("username exist");

											echo "notassi \n";
										}
										else{
									echo "ava\n";
										}
	//$score1=$score1 + $r1ow['score'];
	
}
// this will put user details if it didnt exists
else
{
	$strSQL="INSERT INTO assessment(admissionno,schuname,class,subject,year,term,type,score) VALUES('$id[$i]','$schuname','$mclass','$sname','$session','$term','$type','$score[$i]')";
mysqli_query($db,$strSQL) or die("username exist");

echo "no details \n";
	}
	}
	echo "add";
 }
	header("location:mysubject.php");
?>


 
<?php
 //echo $subject;

//$name=$_POST['sname1'] ;

//$class=$_POST['class1']; 


//$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());

//iserting new user into the database
//$strSQL="INSERT INTO $uname(class,name,accttype) VALUES('$class','$subject','$acttype')";
//mysqli_query($db,$strSQL) or die("username exist");
//mysqli_close($db);


//echo " are offerin ".$name;


//header("location:addsub.php");
?>