<!DOCTYPE html>

<?php

session_start();
if (isset($_SESSION['uname'])){
$uname=$_SESSION['uname'];
}
if (isset($_SESSION['accttype'])){
$accttype=$_SESSION['accttype'] ;

if ($accttype=="teacher"){
	//$uname=$_SESSION['uname'];
?>



<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $uname ?></title>

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
               
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="myclass.php">My Class</a>
                        </li>
						<li>
                            <a href="mysubject.php">My Subjects</a>
                        </li>
						<li>
                            <a href="index.php">My Notes</a>
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
                        <h1 class="page-header"><?php echo $uname ?></h1>
                    </div>
                </div>
                <!-- /.row -->
									   
<?php
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 
				 $strsql1="SELECT * FROM users WHERE uname='$uname'"or die("mysqli_error()");
					$rs1=mysqli_query($db,$strsql1);
					
				while($row1=mysqli_fetch_array($rs1)){
					$fname=$row1['fname'];
					$lname=$row1['lname'];	
					$oname=$row1['oname'];						
					$address=$row1['address'];
					$contact=$row1['phone_no'];
					$email=$row1['mail'];
					$qualification=$row1['qualification'];
				
				}?>

<div>
<img src="i/reg.png" width="100px"><br>

</div>
				<div  style="float:center " >
				<p >
				<table style="margin:9px 9px 9px 9px; padding:9px; border-spacing:10px 50px " ><tr><td width="250"  >
				
				
				Name</td><td >
				<?php echo  $fname." ".$lname." ".$oname; ?><p></td></tr><td><p>
				Qualification</td><td>
				<?php echo $qualification ?> </td></tr><td >
				//Speciality<p></td><td>
				//<?php echo "teacounter" ?></td></tr><td>
				DOB<p></td><td>
				<?php echo "dd/mm/yyyy" ?> <a href=#></a></td></tr><td>
				Address<p></td><td>
				<?php echo $address ?></td></tr><td>
				Phone No<p></td><td>
				<?php echo $contact ?></td></tr><td>
				Email<p></td><td>
				<?php echo $email ?></td></tr></table>
				
				</p>
				</div>										 
                                    
                                  
                                    
									
                                  
                            						
												
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
<?php } 
}
else
{
	header("header:logout.php");
}
?>

</html>
