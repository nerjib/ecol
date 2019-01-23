<!DOCTYPE html>
<?php

session_start();

if (isset($_SESSION['uname'])){
$myusername=$_SESSION['uname'] ;
}
else{
	
	header("location:signup.php");
}

?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User Profile</title>

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

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                     
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           									
            </div>
            <!-- /.container-fluid -
        </div>
        <!-- /#page-wrapper -->
  <div class="container" >
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Profile</h3>
                    </div>
                    <div class="panel-body">
					<?php
												
													$db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());
													$strsql="SELECT * FROM users WHERE uname='$myusername'";
													$rs=mysqli_query($db,$strsql);
													while($row=mysqli_fetch_array($rs)){
														
														$myphone=$row['phone_no'];
														$bal=$row['credit'];
																					
													}
														?>
												
                        <form role="form"  method="POST">
						<div align="center"><img src="images/ututor.png" height="50px" width="50"></div>
						<table>
						
						  <tr><td>  Username  </td><td><div class="col-xs-3">
                                </div><?php echo $myusername ?></td></tr>
							<tr><td>
                            Phone Number  </td><td><div class="col-xs-3">
                                </div><?php echo $myphone ?></td></tr>
							<tr><td>
                            Account Balance  </td><td><div class="col-xs-3">
                                </div><?php echo "  N".$bal. ".00" ?></td></tr>
								
							<tr><td>Buy Credit <img src="images/mastercard.jpeg"></img></td><td><h3 style="color:green">VoguePay</h3></td></tr>
							</table>
							 <i> Add funds to ur account to automatcally take care of your new purchase</i>
							<table>
							<tr><td><select name="Payment method"> 
									<option >------------</option> 
									<option value="bank">Bank Transfer</option> 
									<option value="mastercrd">Interswitch/mastercard</option>
									
									</select> </td></tr>
							<tr><td align="right"><input type="submit" value="buy credit"></td></tr>
							</table>
							
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div align="center">
							contact: 08065671336<br/>
							Email: contact@tutorna.com.ng <br/>
							twitter:<a href="http://www.twitter.com/tutorna_ng">@tutorna_ng</a>
							</div>
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
