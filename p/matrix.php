<!DOCTYPE html>

<script language="javascript">
	
    function questionnaire(){
	var q1=document.getElementById("q12");
	var q2=document.getElementById("q21");
	var q3=document.getElementById("q33");
	var q4=document.getElementById("q43");
	var score=0;
	
	if (q1.checked){
	document.getElementById("coment").innerHTML="correct";
	document.getElementById("coment").style.background="green";
	score=score + 1;
	}
	else{
	document.getElementById("coment").innerHTML="wrong";
	document.getElementById("coment").style.background="red";
		}
		
		
		if (q2.checked){
	document.getElementById("coment2").innerHTML="correct";
	document.getElementById("coment2").style.background="green";
	score=score + 1;
	}
	else{
	document.getElementById("coment2").innerHTML="wrong";
	document.getElementById("coment2").style.background="red";
		}
	
		if (q3.checked){
	document.getElementById("coment3").innerHTML="correct";
	document.getElementById("coment3").style.background="green";
	score=score + 1;
	}
	else{
	document.getElementById("coment3").innerHTML="wrong";
	document.getElementById("coment3").style.background="red";
		}
		
		if (q4.checked){
	document.getElementById("coment4").innerHTML="correct";
	document.getElementById("coment4").style.background="green";
	score=score + 1;
	
	}
	else{
	document.getElementById("coment4").innerHTML="wrong";
	document.getElementById("coment4").style.background="red";
		}
		
		var percent=(score/4)*100;
		document.getElementById("score").innerHTML=percent + "%";
		if (percent >= 50){
			document.getElementById("solution").style.display="";
					}
		else{
			document.getElementById("solution").style.display="none";
		}
	}
	
	function exercise(){
		document.getElementById("exercisediv").style.display="";
		
	}
	
	
</script>
	

<?php 
session_start();
//if (isset($_SESSION['state'])){
//$mystate=$_SESSION['state'];
//$mylga=$_SESSION['lga'];
//$mylgcode=$_SESSION['lgcode'];
//$mystatecode=$_SESSION['statecode'];
//$myphoneno=$_SESSION['phone_no'];



?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Matrix</title>

		<script src="myscript.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
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
                <a class="navbar-brand" href="sms.php">uT</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                   
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logincitidev.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                                    <a href="index.php#">Library</a>
                                </li>
								
                                <li>
                                    <a href="index.php#">Completed Topics</a>
                                </li>
                                <li>
                                    <a href="logincitidev.html">Available Subject</a>
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
                    <h1 class="page-header">Matrix</h1>
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
                </div><a href="#">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
					
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                </div>
                                                                    
                                    <div>
									Discussion
									</div>
                                </div>
							 
                        </div>
                        
                            
                      
                    </div>
                </div>
                </a>
            <!-- /.row -->
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           
                        </div>
                        <!-- /.panel-body -->
                    <div class="panel panel-default">
                        <div >
                            <i class="fa fa-clock-o fa-fw"></i> Matrix
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
												<?php
												
												//	$db=mysqli_connect('localhost','root','','sms') or die(mysqli_error());
													//$strsql="SELECT * FROM subjects";
													//$rs=mysqli_query($db,$strsql);
													//while($row=mysqli_fetch_array($rs)){
														
														//$topic=$row['topic'];
														//$subject=$row['subject'];
														//$tutor=$row['tutor'];
																								
														
														?>
														
														
														 <li>
                                    
                                   
                                     
									   <div class="timeline-heading">
									   <a href="#"  action="login.php" method="post"> 
                                            <h4 class="timeline-title"> Matrix Operations </h4>
										</a>		
                                            <p><small class="text-muted"><i class="fa fa-folder-o"></i>      Week 1	 </small>
                                            </p>
                                        </div>									
										
                                        <div class="timeline-body">
																						                                     
										<div>
										
										<video width="320" height="140" controls> 
										<source src="images/introductiontomatrices.mp4" type="video/mp4">
										</video>
										
										<p><small class="text-muted"><i class="fa fa-clock-o"></i>      5 minutes </small>
                                            </p>
															<input type="submit" id="exercise" onclick="exercise();" value="Take Exercise">						
	                      </div>						  
                                </li >
								
								       
									<li class="timeline-inverted" style="display:none" id="exercisediv">
                                					
																
																<table><tr><td>
																1. Solve <img src="images/matrixq1.jpeg" width="100px" height="100px"></td></tr> (jamb 2008)
																<tr><td>
																			<input type="radio" id="q11" name="q1"  checked>a <img src="images/matrixq11.jpeg" width="60px" height="100px">
																			
																			<input type="radio" id="q12" name="q1" value="f">b <img src="images/matrixq12.jpeg" width="60px" height="100px">  
																			<input type="radio" id="q13" name="q1" value="f">c <img src="images/matrixq13.jpeg" width="60px" height="100px">  
																			<input type="radio" id="q14" name="q1" value="f">d <img src="images/matrixq14.jpeg" width="60px" height="100px"> </td><td> <div id="coment"></div></td></tr>
																				
																	<tr><td>use the Matrix below to answer question 2 to 5 </td></tr>
																	<tr><td>
																	A= <img src="images/matrixq2.jpeg" width="100px" height="100px"></td></tr>
																	
																	<tr><td>
																	2.  Matrix A has ___ element</td><td>Jamb 2010</td></tr> 														
																			<tr><td><input type="radio" id="q21" name="q2"  checked>a. 4																			
																			<input type="radio" id="q22" name="q2" value="f">b. 6  
																			<input type="radio" id="q23" name="q2" value="f">c. 10  
																			<input type="radio" id="q24" name="q2" value="f">d. 100 </td><td><div id="coment2"></div></td></tr>
																			
																		<tr><td>	
																	3.  what is the dimension of Matrix A </td><td>(jamb 2010)</td></tr> 
														
																			<tr><td><input type="radio" id="q31" name="q3"  checked>a. 2 x 4																			
																			<input type="radio" id="q32" name="q3" value="f">b. 4 x 2
																			<input type="radio" id="q33" name="q3" value="f">c. 2 x 2
																			<input type="radio" id="q34" name="q3" value="f">d. 4 x 4 </td><td><div id="coment3"></div></td></tr>
																	
																			
																			<tr><td>
																	4.  IN Matrix A element A22 is</td><td>(jamb 2010)</td></tr> 
														
																			<tr><td><input type="radio" id="q31" name="q4"  checked>a. 6																			
																			<input type="radio" id="q42" name="q4" value="f">b. 4 
																			<input type="radio" id="q43" name="q4" value="f">c. 100  
																			<input type="radio" id="q44" name="q4" value="f">d. 10 </td><td><div id="coment4"></div></td></tr>
																	
																<tr><td>	<button id="login" onclick="questionnaire();">login</button> </td></tr>
																
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
									
	                            
								
												<?php
														
													//}
													
													
													
//}
//else{
//	header("location:logincitidev.html");
	
//}
												?>

							
							
                               
                                                          
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
	
	<p id="remak" ></p>
									

</body>

</html>
