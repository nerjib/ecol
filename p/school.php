<!DOCTYPE html>

<?php
Session_Start();
$accttype=$_SESSION['accttype'];
if ($accttype=="sch"){

?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Makaranta</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

  
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
         
		  
			
         

          

                       		
						
											
		                <h2> </h2>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
					
					 <table align="center" cellpadding="30" cellspacing="50"  >
 
 <tr><td><a href="student.php" style="text-decoration:none"> Students </a></td><td> </div> </div><br/><div class="col-xs-3"></div><div class="col-xs-3"> </div><a style="text-decoration:none" href="classes.php">Classes</a></p></td></tr>
 <tr><td><p><a href="teachers.php" style="text-decoration:none"><img src="p/i/box.png"><br/>Teachers</a></td><td><div class="col-xs-3"> </div><div class="col-xs-3">
 </div><a href="p/trail.php" style="text-decoration:none"><img src="p/i/trail.png"></a><br/><div class="col-xs-3"> </div><div class="col-xs-3"> </div><a href="p/box.php" style="text-decoration:none">Notice Board</a></p></td></tr>
 <tr><td><p><a href="bursary.php" style="text-decoration:none"><img src="p/i/reg.png"></br>Bursary</a></td><td><p><a href="settings.php" style="text-decoration:none"><img src="p/i/reg.png"></br>Settings</a></td></tr>
 
 </table>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
			
            <!-- /.navbar-static-side -->
        </nav>

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
   
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	
<?php }
else
{
	
	header("location:index.php");
}
?>
</body>

</html>
