<!DOCTYPE html>
<html lang="en">


<script type="text/javascript">

function hider1(){
	document.getElementById("subform").style.display="none";
		document.getElementById("tform").style.display="";

	}
	
	function hider2(){
	document.getElementById("subform").style.display="";
		document.getElementById("tform").style.display="none";

	}
	function actinfo(){
	var act=document.getElementById("paytype").value;
		
	if (act =="otherfee" ){
	document.getElementById("otherinput").style.display="";
	}
	
	else{
	
	document.getElementById("otherinput").style.display="none";
	
	}
	
		
	}
	
	
		
	
	
</script>

<?php session_start();
$uname=$_SESSION['uname'];
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payment Setup</title>

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
		<form action="index.php">
		<button >Home</button>
		</form>
		<button onclick="hider2();">Add Payment</button><button onclick="hider1();">Remove Payment</button>
		
 <table border="bold" >
									   <tr><td width="150px" align="center">S/No</td><td width="300px" align="center">Class</td><td align="center" width="500px">Description</td><td width="100px" align="center">Amount</td></tr></table>
				<?php
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $uname WHERE accttype='payment'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$counter=0;
while($row=mysqli_fetch_array($rs)){
	$class=$row['class'];
	$description=$row['name'];
	$amount=$row['total'];
		//$class=$row['class'];
		//$cordinator=$row['teachuname'];
				//$title=$row['title'];
				$counter ++;
?>
                
		   <div class="timeline-heading">
									   
		<form  method="POST">		<table>
									   <tr><td width="150px" align="center"><?php echo $counter ?></td>
									   <td width="300px" align="center"><?php echo $class ?></td> <td align="center" width="500px"><?php echo $description ?></td>
									   <td align="center" ><?php echo $amount ?></td></tr></table>
</form>
									   
<?php  } ?>



		
            <div class="col-md-4 col-md-offset-4" id="subform" style="display:none">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    

					<h3 class="panel-title">Payment </h3>
                    </div>
                    <div class="panel-body">
					
                        <form role="form" action="insertfees.php" method="POST">
						
						
						
						<select id="paytype" name="paytype"  onblur="actinfo();">
											   
				<option  value="School Fees"> School Fees </option>
				<option  value="Registration Fees"> Registration Fees </option>
				<option  value="Exam Fees"> Exam Fees </option>
				<option  value="otherfee"> Other Fees </option>
							
				</select>
						
					
                            <fieldset>
							<div class="form-group">
							
							<div style="display:none" id="otherinput">
							<h5>Describe Payment</h5>
                                    <input class="form-control" placeholder="" name="otherpay" type="Text" autofocus >
									</div >
                                </div>
								
								<div class="form-group">
                                   <h3>	CLASS</h3></td><td><select id="acttype" name="payclass"  >
			<?php			


								   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT DISTINCT class FROM $uname WHERE accttype='class'"or die("mysqli_error($db)");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$name=$row['class'];
	//	$title=$row['title'];
		?>
								   
				<option  value="<?php echo $name ; ?>"><?php echo $name  ?></option>
				<?php } ?>			
				</select>

                                </div> 
                             								
								<div class="form-group">
							<h5>Amount</h5>
                                    <input class="form-control" placeholder="Amount" name="amount" type="Text" autofocus required>
                                </div>
								
								
                                
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Add Payment"  >
									<div class="col-xs-3">                                    
                                </div>
								
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
			
<!--			############################################################################################# -->
			 <div class="col-md-4 col-md-offset-4" id="tform" style="display:none">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    

					<h3 class="panel-title">Remove Payment </h3>
                    </div>
                    <div class="panel-body">
					
                        <form role="form" action="removefees.php" method="POST">
                            <fieldset>
														
								
								                            								
	<div class="form-group">
                                   <h3>	Select Payment</h3></td><td><select id="acttype" name="id"  >
			<?php			


								   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $uname WHERE accttype='payment'"or die("mysqli_error($db)");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$class=$row['class'];
	$description=$row['name'];
	$amount=$row['total'];
	$id=$row['id'];
	
		?>
								   
				<option  value="<?php echo $id; ?>"><?php echo $class." ".$description  ?></option>
<?php } ?>			
				</select>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Remove Payment";" >
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
