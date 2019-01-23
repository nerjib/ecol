<!DOCTYPE html>
<?php

session_start();

if (isset($_SESSION['uname'])){
$myusername=$_SESSION['uname'] ;



?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>About Tutorna</title>

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
				
                <a class="navbar-brand" href="index.php">Tutorna</a>
				<img src="images/ututor.png" height="70px" width="70">
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"  align="right">
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
<?php } ?>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="#"> Admission update</a>
                        </li>
						<li>
                            <a href="#"> Jamb Update</a>
                        </li>
						<li>
                            <a href="#">WAEC Update</a>
                        </li><li>
                            <a href="#">NECO Update</a>
                        </li>
						<li>
                            <a href="#">Scholarship Update</a>
                        </li>
                        
                                    <!-- /.nav-third-level -->
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
                        <h1 class="page-header">About Tutorna</h1>
                    </div>
                </div>
                <!-- /.row -->
						
                                    
                                <p>   Tutorna is an online learning platform that prepares secondary school student for their 
								   final year exams. The topics are derived from jamb and waec syllabus and the exercises are purely from 
								   past waec and jamb exams. The Lecture Video and the solution of the exercises are done by qualified teachers
								   who excelled in the field. PDF files are included in some lectures.<br/><br/>
								   Users will be shown explcit solution of the exercises when they score fifty percent or above of the exercises, this is so as to let them put
								   effort before the solution is given to them. Some of the content are free while some need small amount of subscription fee.<br/><br/>
								   Users can credit their account with their master card or using USSD code. <br/><br/>
								   <a href="signup.php">Sign up here</a> and you will be contacted to participate in the beta launch of Tutorna.<br/>
								   or<br/>
								   <a href="logintutorna.php">Login here</a> to view demo
								   							   
								   
								      </p>
									  <p>
									  Invite your family and friends to join Tutorna
									  <form action="invite.php" method="POST">
									  <table>
									  <tr><td>
									 FAF Name</td><td><input type="Text" name="fafname"></td></tr>
									 <tr><td> FAF Phone Number </td><td><input type="Text" name="fafno"></td></tr>
									 <tr><td><div></div></td><td><input type="submit" name="send" Value="Send Invite"></td></tr>
									 </table>
									  </form>
									  </p>
									   			
	                      </div>
                                
													
											<h3><a href="logintutorna.php"><button>Login</button></a></h3>	<h3><a href="signup.php"><button>Sign up</button></a></h3>
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
