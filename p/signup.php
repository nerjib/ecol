<!DOCTYPE html>
<html lang="en">


<script language="javascript">

function actinfo(){
	var act=document.getElementById("acttype").value;
		
	if (act =="student" ){
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

    <title>Tutorna SignUp</title>

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
                        <h3 class="panel-title">Sign Up Makaranta</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="insertsignup.php" method="POST">
                            <fieldset>
							<div class="form-group">
                                    <input class="form-control" placeholder="Username" name="uname" type="Text" autofocus required>
                                </div>
                              <div class="form-group">
                                    <input class="form-control" placeholder="Phone Number" name="phone_no" type="Text"  required>
                                </div>
								<div class="form-group">
                                   <h5>	Account Type</h5></td><td><select id="acttype" name="acttype" onblur="actinfo();" >
				<option  value="student">Student</option>
				<option value="sch">School</option>
			
				</select>
			
                                </div>
								<div style="display:none" id="schform">
								<div class="form-group"  >
                                							
								<input class="form-control" placeholder="School Name" name="schname" type="Text" >
                                </div>
								
							<div class="form-group"  >
                                							
								<input class="form-control" placeholder="State" name="schstate" type="Text" >
                                </div>
								<div class="form-group"  >
                                							
								<input class="form-control" placeholder="Town" name="schtwn" type="Text" >
                                </div>
								<div class="form-group"  >
                                							
								<input class="form-control" placeholder="LGA" name="schlga" type="Text" >
                                </div>
								
								</div>
								
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pword" type="password"  >
                                </div>
								 <div class="form-group">
                                    <input class="form-control" placeholder="Re Enter Password" name="pword2" type="password" value="" >
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign Up">
									<div class="col-xs-3">                                    
                                </div>
								<div>Already have an account <a href="loginecole.php">sign In here</a></div>
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
