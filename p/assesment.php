<!DOCTYPE html>
<html lang="en">
<?php

session_start();
$schuname=$_SESSION['schuname'];
if (isset($_SESSION['uname'])){
$uname=$_SESSION['uname'];
}
if (isset($_SESSION['accttype'])){
$accttype=$_SESSION['accttype'] ;
}
if ($accttype=="teacher"){
	
	if (isset($_SESSION['class2'])){
$mclass=$_SESSION['class2'];

if (isset($_SESSION['sname2'])){
$s_name=$_SESSION['sname2'];

	
		$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM users WHERE uname='$schuname'&& accttype='sch'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$term=$row['term'];
$session=$row['year'];}
	
?>


<script language="javascript">

function actinfo(){
	var act=document.getElementById("acttype").value;
		
	if (act =="stud" ){
	document.getElementById("schform").style.display="none";
	}
	
	else{
	
	document.getElementById("schform").style.display="";
	
	}
	
		
	}
	
</script>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Assessment</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div style="float:right"><form action="assessmentref.php" Method="POST">
        <select name="remov">
						<option value="1">DELETE 1st <?php echo $s_name ?> C.A</option>
						<option value="2">DELETE 2nd <?php echo $s_name ?> C.A</option>
						<option value="3">DELETE 3rd <?php echo $s_name ?> C.A(Exams)</option>
						</select> <input type="submit"  value="DELETE RECORD">  </h3> 
						</div>				

                    </form>

    <div class="container" style="float:left"><form action="assessmentref.php" Method="POST">
       <div> <select name="type">
						<option value="1">1st <?php echo $s_name ?> C.A</option>
						<option value="2">2nd <?php echo $s_name ?> C.A</option>
						<option value="3">3rd <?php echo $s_name ?> C.A(Exams)</option>
						</select> <?php echo $session. "  ".$term ?>   For <?php echo $mclass ?>  </h3> 
				</div>

 							
																		<?php
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $schuname WHERE accttype='student' && class='$mclass'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
$name=$row['name'];
$id=$row['teachuname'];
?>
								
                           <div width="500px"> <table style="text-transform:uppercase;"><tr><td width="300px"> <?php echo $name ?></td><td>		
								<input name="score1[]"  type="Text"  >  <input type="hidden" name="id[]" value="<?php echo $id ?>"></td></tr><?php }; ?>	</table>
								
                               
								
                                							

                                
                                <!-- Change this to a button or input when using this as a form -->
                                    <div align="left" style="padding-left:150px">                          
                                   <input type="submit"  value="Record Scores">
									</div>
									</div>
								 	 
							 </div>
						  </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>
<?php 
}
	}
}
else{
	header("location:index.php");
}
?>

</html>
