<!DOCTYPE html>
<?php 
session_start();
if (isset($_SESSION['uname'])){
$myusername=$_SESSION['uname'];

if (isset($_SESSION['topic'])){
	$topic=$_SESSION['topic'];
	}
	else{
		
		$topic=$_POST['topic'];
$_SESSION['topic']=$topic;
	}

?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutorna</title>

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
				</div>
			
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                   
                <!-- /.dropdown -->
                <li class="dropdown">
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
 <div >
                        		
								<?php
												
													$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());
													
													
													$strsql="SELECT * FROM discuss WHERE topic='$topic'";
													$rs=mysqli_query($db,$strsql);
													while($row=mysqli_fetch_array($rs)){
														
													$coment=$row['coment'];
													$name=$row['name'];
													$time=$row['time'];
													
														?>
												<table><tr><td>
												<?php  echo $name ?></td></tr>
												<tr><td ><div></div></td><td>
												<?php  echo $coment ?></td></tr>
												<tr><td><div></div></td><td><i><?php  echo $time ?></i></td></tr>
												</table>
												
													
								<?php 
								
								}
								
								}
								
else{
	
	header("location:logintutorna.php");
}								?>
                            <table><tr><td><form action="insertcoment.php" method="POST">
												<?php  echo $myusername ?></td></tr>
												<tr><td ><div></div></td><td>
												<textarea name="mycoment" rows="3" ></textarea></td></tr>
												<tr><td><div></div></td><td align="right"><i><input type="submit" name="submitcoment" value="POST"></i></td></tr>
												</table>
												</form>
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
