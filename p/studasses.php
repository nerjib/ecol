<!DOCTYPE html>

<?php
$mclass="";
$term="";

session_start();
$schuname=$_SESSION['schuname'];

if (isset($_SESSION['uname'])){
$uname=$_SESSION['uname'];
}
if (isset($_SESSION['accttype'])){
$accttype=$_SESSION['accttype'] ;
}
if ($accttype=="student"){
	$admno=$_SESSION['admno'];
	if (isset($_POST['term'])){
	$term=$_POST['term'];
	}
	if (isset($_POST['class'])){
	$mclass=$_POST['class'];
	}
//	$mclass=$_SESSION['sclass'];
?>



<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Results</title>

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


<script language="javascript">

function actinfo(){
	
	document.getElementById("schform").style.display="none";
	var ajaxdispla=document.getElementById("unam");
	ajaxdispla.innerHTML="dd"
}
	
	
</script>


<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		 <div class="navbar-header">
		     
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
               
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" align="right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="index.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
													
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="index.php">Home</a>
                        </li>
						<form action="<?php $_PHP_SELF ?>" method="POST">
						<li>
						Class
						<?php
						   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT DISTINCT class FROM assessment WHERE schuname='$schuname' && admissionno='$admno'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql); ?>
<select name="class">
<?php
while($rho=mysqli_fetch_array($rs)){
$klas=$rho['class'];
?>
						
<option value="<?php echo $klas ?>"><?php echo $klas ;  ?></option>
<?php } ?>
					</selecT>
						</li>
						
						<li>
						Term
						<select name="term">
						<option value="1st term"> 1st Term</option>
						<option value="2nd term"> 2nd Term</option>
						<option value="3rd term"> 3rd Term</option>
						</selecT>
						</li>
						<button >Retrieve</button>
</form>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                            </ul>
                            <!-- /.nav-second-level -->
							

                        </li>
                    </ul>
					
                </div>
				
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
					<?php
				//	if($term==1st term){
					//	$tam="1st Term";
					//}
					//elseif($term==2){
						//$tam="2nd Term";
					//}
					//elseif($term==3){
						//$tam="3rd Term";						
					//}
					//else{
						//$tam="";
					//}
					?>
                        <h1 class="page-header" style="text-transform:uppercase;"><?php echo $mclass. " ".$term. " Results"  ?></h1>
                    </div>
                </div>
                <!-- /.row -->
									   
  <table border="bold" width="100%" style="text-transform:uppercase; ">
		 <tr style="text-transform:uppercase; font-size:10px" ><td width="10px" align="center">S/No</td><td width="100px" align="center">Subject</td>
		 <td align="center" width="50px">1st C.A</td> <td align="center" width="50px">2nd C.A</td> <td align="center" width="50px">Exams</td>
		  <td align="center" width="50px">Total</td><td align="center" width="50px">Class Average</td>
		  <td align="center" width="50px">REMARK</td> <td align="center" width="100px">Grade</td></tr>
									   <?php
									   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT DISTINCT subject FROM assessment WHERE schuname='$schuname' && admissionno='$admno' && term='$term' && class='$mclass'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$counter=0;
$total=0;
while($row=mysqli_fetch_array($rs)){
	$subject=$row['subject'];
$counter ++;


									   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql1="SELECT DISTINCT score FROM assessment WHERE schuname='$schuname' && subject='$subject' && admissionno='$admno' && term='$term' && type='1' && class='$mclass'"or die("mysqli_error()");
$rs1=mysqli_query($db,$strsql1);
$score1=0;
while($row1=mysqli_fetch_array($rs1)){
	$score1=$score1 + $row1['score'];
}

?> 
<?php 
$strsql2="SELECT DISTINCT score FROM assessment WHERE schuname='$schuname' && subject='$subject' && admissionno='$admno' && term='$term' && type='2' && class='$mclass'"or die("mysqli_error()");
$rs2=mysqli_query($db,$strsql2);
$score2=0;
while($row2=mysqli_fetch_array($rs2)){
	$score2=$score2 + $row2['score'];
}
	?>
	
	<?php 
$strsql2="SELECT DISTINCT score FROM assessment WHERE schuname='$schuname' && subject='$subject' && admissionno='$admno' && term='$term' && type='3' && class='$mclass'"or die("mysqli_error()");
$rs2=mysqli_query($db,$strsql2);
$score3=0;
while($row2=mysqli_fetch_array($rs2)){
	$score3=$score3 + $row2['score'];
}
$total=$score1+$score2+$score3;
	 
 
 //calculating the class average for each subjecct
 $s1trsql1="SELECT * FROM assessment WHERE schuname='$schuname' && class='$mclass' && subject='$subject' && term='$term'"or die("mysqli_error()");
					$r1s=mysqli_query($db,$s1trsql1);
					$subtot=0;
					$subjectave="";
					
					while($r1ow=mysqli_fetch_array($r1s)){
						$cscore=$r1ow['score'];
					$subtot=$subtot + $cscore;
					//$studentcounter ++;
					}
					//number of student taking the subject
						$studentcounter=0;
						 $strsql4="SELECT * FROM $schuname WHERE accttype='student' && class='$mclass'"or die("mysqli_error()");
						 $rs4=mysqli_query($db,$strsql4);
							while($row4=mysqli_fetch_array($rs4)){
								$studentcounter ++;
					}
					
	$subjectave=round($subtot/$studentcounter,2);
			
 
 	 
 ?>
           
		   <div class="timeline-heading">
		
<tr><td width="10px" align="center"><?php  echo $counter ?></td><td width="50px" align="center"><?php echo $subject ;  ?></td>
<td align="center" width="50px" style="text-transform:uppercase; font-size:14px"><?php echo $score1;  ?></td>
<td width="50px" align="center"><?php echo $score2;    ?></td> 
<td width="50px" align="center"><?php echo $score3 ;    ?></td><td width="50px" align="center"><?php echo $total ;    ?></td>
<td width="50px" align="center"><?php echo $subjectave ;  //}  ?></td><td width="50px" align="center"><?php

if ($total<=45){
	$remark="F";
}
elseif($total>45 && $total<50){
	$remark="D";
}
elseif($total>=50 && $total<60){
	$remark="C";
}
elseif($total>60 && $total<70){
	$remark="B";
}
elseif($total>=70 && $total<=100){
	$remark="A";
}

  echo $remark ; } ?></td></tr><?php //}  ?></table>
</form>
									   
<?php 

}
else
{	
	header("location:index.php");
}
				 ?>


														 
                                    
                                  
                                    
									
                                  
                            						
												
            </div>
            <!-- /.container-fluid -
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
