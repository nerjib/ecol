<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$uname=$_SESSION['uname'];
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
?>

<script language="javascript">


</script>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Profile</title>

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

           
					<?php
					 $strsql="SELECT * FROM users WHERE uname='$uname' && accttype='sch'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$schname=$row['schname'];
		
		$adress=$row['address'];
		$session=$row['year'];
				$motto=$row['motto'];
					$phone=$row['phone_no'];
						$mail=$row['mail'];
							$term=$row['term']
?>
								   
				<?php } ?>			
								
	
</div></div></div>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">

                        <h3 class="panel-title">Update Profile </h3>
                    </div>
					<h1><?php echo $schname ?></h1>
                    <div class="panel-body">
                        <form role="form" action="updateschprofile.php" >
                            <fieldset>
							
								
								<div  id="schform">
								<div class="form-group"  >
                                							
								<?php echo "Motto: ".$motto ?>
                               							
									<div class="form-group">
                                   <h5>	Session: <?php echo $session ?>
				</div>
								<div class="form-group"  >
	<div class="form-group">
                                   <h5>	Term:<?php echo $term ?> </h5>
								<div class="form-group"  >


<div class="form-group"  >
                                							
							<h5>	<?php echo "Address: ".$adress ?> </h5>
                                </div>
								<div class="form-group">
                                    <h5><?php echo "Phone No.: ".$phone ?></h5>
                                </div>
								
								<div class="form-group"  >
                                							
								<h5><?php echo "Mail: ".$mail ?></h5>
                                </div>
								

                                
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <Button class="btn btn-lg btn-success btn-block" >Click Update School Profile</Button>
								<div align="right"><a href="school.php">skip</a></div>
									<div class="col-xs-3">                                    
                                </div>
								
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
