
<?php 
//header("location:http://localhost/stores");
session_start();
$uname=$_SESSION['uname'];
$acttype=$_SESSION['accttype'];

if ($acttype=="sch"){
	header("location:school.php");
//header("location:http://localhost/stores");

	}
	else if($acttype=="teacher"){
			header("location:teacherdashboard.php");
		
	}
	else if($acttype=="student"){
		
			header("location:accountactivation.php");
	}
	else{
		header("location:logout.php");
	}


?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mov</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

  
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
</head>

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
				hh
               <a class="navbar-brand" href="index.php">Tutorna</a>
				 <a href="index.php"><img src="images/ututor.png" height="70px" width="70"></a>
				</div>
			
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"  align="right">
                   
                <!-- /.dropdown -->
                <li class="dropdown"  align="right">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.php"><i class="fa fa-user fa-fw"></i>Profile</a>
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
											<?php echo $acttype; ?>
                       		
								<?php
												
													$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());
													
													
																			$strsql="SELECT DISTINCT subject FROM subject ORDER BY id DESC";
													$rs=mysqli_query($db,$strsql);
													while($row=mysqli_fetch_array($rs)){}
														
													$subject=$row['subject'];

														?>
														
												<form method="POST" action="sub.php">
												<input type="submit"  value="<?php  echo $subject ?>" name="sub" style="width:100%; background-color:lightblue; color:white; padding:15px 32px">
												
												</form>
											
												
                         <h2>  <a href="about.php"> Invite Friends And Earn Credit When They SIGN UP</a></h2>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
   
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
