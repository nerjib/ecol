<!DOCTYPE html>
<?php 
session_start();
if (isset($_SESSION['uname'])){
$myusername=$_SESSION['uname'] ;
}
else{
	
	$myusername="free";
}

?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UncleTutor</title>

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
				
                <a class="navbar-brand" href="index.html">UncleTutor</a>
				<img src="images/ututor.png" height="70px" width="70">
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

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        
                        <li>
                            quick links
                            <li>
                                    <a href="profile.php">Profile</a>
                                </li>
                                <li>
                                    <a href="#">Library</a>
                                </li>
								
                                <li>
                                    <a href="#">Completed Topics</a>
                                </li>
                                <li>
                                    <a href="availabletopics.php">Available Subject</a>
                                </li>
								 <li>
                                    <a href="about.php">About UncleTutor</a>
                                </li>
								 <li>
                                    <a href="contact.php">Contact Us</a>
                                </li>
                            
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">board</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <a href="#">
						<div class="panel-heading">
                            <div class="row">                
								<div class="col-xs-3">
                                </div>
                                
                                    <div> 			
									My Subject
									
									</div>
                               </div>
                        </div>
                         </a>                           
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
					<a href="#">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                                                    
                                    <div>
									Discussion
									</div>
                                </div>
							  </a>
                        </div>
                        
                            
                      
                    </div>
                </div>
               
            <!-- /.row -->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                        </div>
                        <!-- /.panel-body -->
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="nav">
												<?php
												
													$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());
													
													
													if ($myusername=="free") {
													$strsql="SELECT * FROM subject WHERE price='$myusername'";
													$rs=mysqli_query($db,$strsql);
													while($row=mysqli_fetch_array($rs)){
														
														$topic=$row['topic'];
														$subject=$row['subject'];
														$tutor=$row['tutor'];
													$price=$row['price'];		
													//}
													
													//}
													
														?>
														 <li>
                                    
                                   
                                     
									   <div class="timeline-heading">
									  
									   <a href="<?php echo $topic.".php" ?> "  action="login.php" method="post"> 
                                            <h4 class="timeline-title"><?php echo $topic; ?></h4>
										</a>		
                                            <p><small class="text-muted"><i class="fa fa-folder-o"></i> <?php     echo $subject;	?> </small>
                                            </p>
                                        </div>									
										
                                        <div class="timeline-body">
																						                                     
										<div>
										<p><small class="text-muted"><i class="fa fa-user"></i> <?php     echo $tutor;	?> </small><div class="col-xs-3">
                                </div><div style="color:blue"><?php echo  "Demo" ?></div> </p>
									  	</div>
										</div>
										</li>
													<?php												
	
													}
													}
													
													
										else{
													






													$usql="SELECT * FROM $myusername";
													$urs=mysqli_query($db,$usql);
													while($urow=mysqli_fetch_array($urs)){
														
														$mytopic=$urow['mytopic'];
															
															$strsql="SELECT * FROM subject WHERE topic='$mytopic'";
													$rs=mysqli_query($db,$strsql);
													while($row=mysqli_fetch_array($rs)){
														
														$topic=$row['topic'];
														$subject=$row['subject'];
														$tutor=$row['tutor'];
													$price="subscribed";		}
													
													?>

					 <li>
                                    
                                   
                                     
									   <div class="timeline-heading">
									  
									   <a href="<?php echo $topic.".php" ?> "  action="login.php" method="post"> 
                                            <h4 class="timeline-title"><?php echo $topic; ?></h4>
										</a>		
                                            <p><small class="text-muted"><i class="fa fa-folder-o"></i> <?php     echo $subject;	?> </small>
                                            </p>
                                        </div>									
										
                                        <div class="timeline-body">
																						                                     
										<div>
										<p><small class="text-muted"><i class="fa fa-user"></i> <?php     echo $tutor;	?> </small><div class="col-xs-3">
                                </div><div style="color:blue"><?php echo  $price ?></div> </p>
									  	</div>
										</div>
										</li>
																						
													
													
													
													
													
													<?php
													
//else{
//	header("location:logincitidev.html");
	}
}	?>

							<a href="availabletopics.php">view all...</a>
							
                               
                                                          
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                
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
