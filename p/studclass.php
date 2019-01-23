<!DOCTYPE html>

<?php

session_start();
$schuname=$_SESSION['schuname'];
$mclass=$_SESSION['class1'];
if (isset($_SESSION['uname'])){
$uname=$_SESSION['uname'];
}
if (isset($_SESSION['accttype'])){
$accttype=$_SESSION['accttype'] ;
}
if ($accttype=="student"){
	
	$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 
 $strsql="SELECT * FROM users WHERE uname='$schuname'&& accttype='sch'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$term=$row['term'];
$session=$row['year'];
//$term="1";
//$session="2018";
}
	
?>



<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Class</title>

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
                        <li><a href="profile.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
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
										<?php
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $schuname WHERE teachuname='$uname' && accttype='class'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
		$class=$row['name'];
?>
<li >
<form action="myclassref.php" method="POST" >
			<button  method="POST" style="width:100%" value="<?php echo $class ?>" name="class1" >		<?php echo $class ?></button>

</form>
</li>
<?php } ?>

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
                        <h1 class="page-header" style="text-transform:uppercase;"><?php echo "$mclass assessment 1" ?></h1>
                    </div>
                </div>
                <!-- /.row -->
									   
  <table border="bold" width="100%" style="text-transform:uppercase; ">
		 <tr style="text-transform:uppercase; font-size:8px" ><td width="10px" align="center">S/No</td><td width="100px" align="center">Admission No</td><td align="center" width="500px">Name</td>
									   <?php
									   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $schuname WHERE accttype='subject' && class='$mclass'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$counter=0;
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
	
?><td width="50px" align="center" ><?php echo $name ; }?></td><td >Total</td></tr>
				<?php
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 
 // check the name of student of that class
 
  $strsql="SELECT * FROM $schuname WHERE accttype='student' && class='$mclass'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$counter=0;
while($row=mysqli_fetch_array($rs)){
	$studname=$row['name'];
	$admno=$row['teachuname'];
									$counter ++;
									
?>
                
		   <div class="timeline-heading">
		
					<tr><td width="10px" align="center"><?php  echo $counter ?></td><td width="200px" align="center"><?php echo $admno ?></td>
						<td align="center" width="300px" style="text-transform:uppercase; font-size:10px"><?php echo $studname; ?></td>
						<?php
			// check the subject been thought in that class
				$s1trsql="SELECT * FROM $schuname WHERE accttype='subject' && class='$mclass'"or die("mysqli_error()");
					$r1s=mysqli_query($db,$s1trsql);
					//$counter=0;
					while($r1ow=mysqli_fetch_array($r1s)){
						//$name here is subject title
						$name=$r1ow['name'];
							//$class=$row['name'];
							//$cordinator=$row['teachuname'];
							//		$title=$row['title'];			

														//output the score of each subject for each student
														$s2trsql="SELECT * FROM assessment WHERE schuname='$schuname' && class='$mclass' && term='$term' && subject='$name' && year='$session' && admissionno='$admno'"or die("mysqli_error()");
														$r2s=mysqli_query($db,$s2trsql);
														$score2=0;
														while($r2ow=mysqli_fetch_array($r2s)){
														$score2=$score2 +	$r2ow['score'];
														
														
														}
														
														$s3trsql="SELECT * FROM assessment WHERE schuname='$schuname' && class='$mclass' && term='$term' && year='$session' && admissionno='$admno'"or die("mysqli_error()");
														$r3s=mysqli_query($db,$s3trsql);
														$score3=0;
														while($r3ow=mysqli_fetch_array($r3s)){
														$score3=$score3 +	$r3ow['score'];
														
														
														}
					
					
														
					
					?>
					
					<td width="500px" align="center"><?php echo $score2; } ?></td> <td width="500px" align="center"><?php echo $score3 ;   } ?></td></tr><?php //}  ?></table>
</form>
						
<?php 

echo $term.$session;



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
