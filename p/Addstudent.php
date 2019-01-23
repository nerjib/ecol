<!DOCTYPE html>
<html lang="en">


<script language="javascript">

function actinfo(){
	var act=document.getElementById("acttype").value;
		
	if (act =="stud" ){
	document.getElementById("schform").style.display="none";
	}
	
	else{
	
	document.getElementById("schform").style.display="";
	
	}
	
		
	}
	
</script>


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Student</title>

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

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    
<?php session_start();
$uname=$_SESSION['uname'];
?>
					<h3 class="panel-title">Add Student </h3>
                    </div>
                    <div class="panel-body">
					
                        <form role="form" action="addstud.php" method="POST">
                            <fieldset>
							<div class="form-group">
                                    <input class="form-control" placeholder="Admision No" name="admno" type="Text" autofocus required>
                                </div>
                             								
								<div class="form-group">
                                   <h5>	Class</h5></td><td><select id="acttype" name="class"  >
			<?php			


								   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $uname WHERE accttype='class'"or die("mysqli_error($db)");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
		$title=$row['title'];
		



?>
								   
				<option  value="<?php echo $name ; ?>"><?php echo $name  ?></option>
				<?php } ?>			
				</select>

                                </div>
								
								<div class="form-group">
                                   <h5>	Sex</h5></td><td><select id="acttype" name="sex"  >
			
								   
				<option  value="m">Male</option>
				<option  value="f">Female</option>
						
				</select>

                                </div>
		
								<div  id="schform">
								<div class="form-group"  >
                                							
								<input class="form-control" placeholder="Surname" name="sname" type="Text" >
                                </div>
								
							<div class="form-group"  >
                                							
								<input class="form-control" placeholder="First Name" name="fname" type="Text" >
                                </div>
								<div class="form-group"  >
                                							
								<input class="form-control" placeholder="Other name" name="oname" type="Text" >
                                </div>
								<div class="form-group"  >
                                							
								<input class="form-control" placeholder="Address" name="address" type="Text" >
                                </div>
								
								</div>
								
                                
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Add Student">
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
