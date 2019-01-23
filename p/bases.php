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



<script TYPE="text/javascript" src="ans/base.js">
	
</script>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bases</title>

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
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
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
            <!-- /.navbar-top-links --><?php
$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());
													
													
													
													
													 ?>
													
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="sms.php"> My Board</a>
                        </li>
						<li>
                            <a href="profile.php"> My Profile</a>
                        </li>
						
						<?php 
						$strsql="SELECT DISTINCT subject FROM subject ";
													$rs=mysqli_query($db,$strsql);
													while($row=mysqli_fetch_array($rs)){
														
													$subject=$row['subject'];
													?>
                        
                                    <!-- /.nav-third-level -->
									
									<li>
									<?php echo $subject ?>
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
                        <h1 class="page-header">Set Theory</h1>
                    </div>
                </div>
                <!-- /.row -->
				<li>
						 <div class="timeline-heading">
									   <a href="#" > 
                                            <h4 class="timeline-title">Bases: Operation in Different Number Bases</h4>
										</a>		
                                            <p><small class="text-muted"><i class="fa fa-folder-o"></i>      day 1	 </small>
                                            </p>
                                        </div>									
										
                                        <div class="timeline-body">
																						                                     
										<div>
										
										<video width="320" height="140" controls> 
										<source src="images/bases.mp4" type="video/mp4">
										</video>
										
										<p><small class="text-muted"><i class="fa fa-clock-o"></i>      10 minutes </small>
                                            </p>
															<br/>
<br/>															
	                      </div>		
                                    
                                   </li >
								   <li>
						 <div class="timeline-heading">
									   <a href="#" > 
                                            <h4 class="timeline-title">Bases: Conversion From one Base to Another</h4>
										</a>		
                                            <p><small class="text-muted"><i class="fa fa-folder-o"></i>      day 2	 </small>
                                            </p>
                                        </div>									
										
                                        <div class="timeline-body">
																						                                     
										<div>
										
										<video width="320" height="140" controls> 
										<source src="images/bases.mp4" type="video/mp4">
										</video>
										
										<p><small class="text-muted"><i class="fa fa-clock-o"></i>      10 minutes </small>
                                            </p>
															<input type="submit" id="exercise" onclick="exercise();" value="Take Exercise">						
	                      </div>		
                                    
                                   </li >
								
								<li class="timeline-inverted" style="display:none" id="exercisediv">
                                
                                     <div>
															<p id="remark"></p>
																
																
																<table><tr><td>
																1. The  sum of  four numbers  is 1214<sub>5</sub>.  What  is the average expressed in base five? </td></tr> (jamb 2003)
																<tr><td>
																			<input type="radio" id="q11" name="q1"  checked>a. 411
																			
																			<input type="radio" id="q12" name="q1" value="f">b.401   
																			<input type="radio" id="q13" name="q1" value="f">c.114   
																			<input type="radio" id="q14" name="q1" value="f">d.141 </td><td> <div id="coment"></div></td></tr>
																				
																	<tr><td>
																	2.<img src="images/base1.jpeg" width="100px" height="100px"> </td></tr>
																	<tr><td>
																	Find x and y respectively  in  the  subtraction above carried out in base 5. (2004)
																	</td></tr>																	
																													
																			<tr><td><input type="radio" id="q21" name="q2"  checked>a. 4, 3																			
																			<input type="radio" id="q22" name="q2" value="f">b. 4,2
																			<input type="radio" id="q23" name="q2" value="f">c. 2, 4
																			<input type="radio" id="q24" name="q2" value="f">d. 3, 2 </td><td><div id="coment2"></div></td></tr>
																			
																		<tr><td>	
																	3.  .  Convert 72<sub>6</sub> to a number in base three.  </td><td>(jamb 2012)</td></tr> 
														
																			<tr><td><input type="radio" id="q31" name="q3"  checked>a.2211																			
																			<input type="radio" id="q32" name="q3" value="f">b. 2121
																			<input type="radio" id="q33" name="q3" value="f">c. 1212
																			<input type="radio" id="q34" name="q3" value="f">d. 1122 </td><td><div id="coment3"></div></td></tr>
																	
																			
																			<tr><td>
																	4.  Convert 2710  to another number in base three. </td><td>(jamb 2013)</td></tr> 
														
																			<tr><td><input type="radio" id="q41" name="q4"  checked>a.1010<sub>3</sub>																			
																			<input type="radio" id="q42" name="q4" value="f">b. 1100<sub>3</sub>
																			<input type="radio" id="q43" name="q4" value="f">c. 1000<sub>3</sub>
																			<input type="radio" id="q44" name="q4" value="f">d. 1001<sub>3</sub> </td><td><div id="coment4"></div></td></tr>
																	
																<tr><td>	<button id="login" onclick="questionnaire();">submit</button> </td></tr>
																
																</table>
																 <div >
																 yoour score is <h2 id="score"></h2> to unluock solution you must pass 50% of the exercise
																 <div id="solution" style="display:none">
																  <div>
																 <h3>solution<br/></h3>
																 <h4>question: 1</h4><br/> <img src="images/matrixq1sol.jpeg" width="200px" height="200px">
																 
																 
																 <h4>question: 2</h4><br/> Matrix A has 2 rows and 2 columns; that is 2 rows each with 2 elements. this adds up 4 elements altogethe <br/>
																 <h4>question 3:</h4><br/> The dimention of matrix A is 2 x 2 that is a has 2 rows and 2 columns<br/>
																<h4> question 4:</h4><br/> A22 means second element in the second row which is 100;
																
																 </div>
																 </li class="timeline-inverted">
																 
																</li>
																 
																 
															</div>


                                    </div>
									
									   
									   
									   
									   
													
	                      </div>
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

</html>
