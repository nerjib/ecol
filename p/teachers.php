<!DOCTYPE html>
<?php

session_start();
if (isset($_SESSION['uname'])){
$uname=$_SESSION['uname'];
}
if (isset($_SESSION['accttype'])){
$accttype=$_SESSION['accttype'] ;
}
if ($accttype=="sch"){
	
?>




<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Teachers</title>

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
                            <a href="index.php">home</a>
                        </li>
						
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
                        <h1 class="page-header"><?php echo "Teachers" ?></h1>
                    </div>
                </div>
                <!-- /.row -->
									   <table border="bold",  style="text-transform:uppercase; font-size:i4px" >
									   <tr><td width="100px" align="center">S/No</td><td width="300px" align="center">Username</td><td align="center" width="500px">Name</td>
									   <td width="100px" align="center">Sex</td><td width="200px" align="center">Qualification</td><td width="200px" align="center">Class</td></tr>
				<?php
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM users WHERE schuname='$uname' && accttype='teacher'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$counter1=0;
while($row=mysqli_fetch_array($rs)){
	$name=$row['uname'];
		$oname=$row['oname'];
		$fname=$row['fname'];
		$lname=$row['lname'];
		$qualification=$row['qualification'];
		

$counter1 ++;



?>

														 
                                    
                                  
                                    
									   <div class="timeline-heading">
									   
		
									   <tr><td width="100px" align="center"><?php echo $counter1 ?></td><td width="300px" align="center"><?php echo $name ?></td>
									   <td align="center" width="500px"><?php echo $fname." ".$oname." ".$lname ?></td>
									   <td width="100px" align="center">m</td><td width="200px" align="center"><?php echo $qualification ?></td>
									   <td width="200px" align="center">
									   <?php
									   $strsql1="SELECT * FROM $uname WHERE accttype='class' && teachuname='$name'"or die("mysqli_error()");
$rs1=mysqli_query($db,$strsql1);
$counter=0;
while($row1=mysqli_fetch_array($rs1)){
	$name=$row1['name'];
echo $name." \n" ; }?>
									</td></tr><?php } ?></table>

									   

                                            </p>
                                        </div>									
										
                                        <div class="timeline-body">
																						                                     
										<div>
										<p>
											</div><div style="color:blue">
										
										<form action="addteacher.php" method="POST"></div>
                                <button value="<?php echo $topic ?>" name="purchase" align="center" >Add Teacher </button> 
</form>
														
												
									   
													
	                      
                                </li>
													
													
												
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
<?php } ?>
</html>
