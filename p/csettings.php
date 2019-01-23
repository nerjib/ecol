<!DOCTYPE html>
<html lang="en">


<script language="javascript">

function actinfo(){
	
		
	
	document.getElementById("classform").style.display="";
	
	
		
	}
	
</script>
<?php

session_start();
if (isset($_SESSION['uname'])){
$uname=$_SESSION['uname'];
}
if (isset($_SESSION['accttype'])){
$accttype=$_SESSION['accttype'] ;
}
if ($accttype=="sch"){
	
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Class Settings</title>

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
<a href="index.php" style="text-decoration:none">Home</a>
 <table border="bold" >
									   <tr><td width="150px" align="center">S/No</td><td width="300px" align="center">Class Name</td>
									   <td align="center" width="500px">Class</td><td width="100px" align="center">Cordinator</td></tr>
				<?php
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $uname WHERE accttype='class'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$counter=0;
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
		$class=$row['class'];
		$cordinator=$row['teachuname'];
				$title=$row['name'];
				$counter ++;
?>
                
		   <div class="timeline-heading">
									   
		
			   <tr><td width="150px" align="center"><?php echo $counter ?></td><td width="300px" align="center"><?php echo $name ?></td>
			   <td align="center" width="500px"><?php echo "$name" ?></td><td width="100px" align="center">
			
<?php			
 $strsql1="SELECT * FROM $uname WHERE accttype='teacher' && teachuname='$cordinator'"or die("mysqli_error()");
$rs1=mysqli_query($db,$strsql1);
//$counter=0;
while($row1=mysqli_fetch_array($rs1)){
	$name1=$row1['name'];
		
				//$title=$row['title'];
		//		$counter ++;
?>
<?php echo $name1; }?></td></tr><?php } ?></table>
									   





<input type="submit" class="btn btn-lg btn-success btn-block" onclick="actinfo();" value="Add Class">

    <div class="container">
        <div class="row" div style="display:none" id="classform">
		
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Class</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="insertcsettings.php" method="POST">
                            <fieldset>
							<div class="form-group">
                                    <input class="form-control" placeholder="Class e.g Jss1, grade 7, etc" name="cname" type="Text" autofocus required>
                                </div>
                             
								
								<div class="form-group"  >
                                							
								<input class="form-control" placeholder="Title e. A, apple, rose, etc" name="title" type="Text" >
                                </div>
						
								<div class="form-group"  >
                                							
								<div class="form-group">
                                   <h5>	Teacher</h5></td><td><select  name="cteacher" onblur="actinfo();" >
								   
		<?php						   
								   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $uname WHERE accttype='teacher'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
		
		$tuname=$row['teachuname'];

?>
								   
				<option  value="<?php echo $tuname; ?>"><?php echo $name  ?></option>
				<?php } ?>			
				</select>

                                </div>
								
                                
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Add">
									<div class="col-xs-3">                                    
                                </div>
								
                            </fieldset>
                        </form>
                    </div>
					
					
					   </div>
            </div>
        </div>
    </div>
	
	<div>
	<form method="POST" action="insertcsettings.php">
	<h3 style="padd1ing:100px">SELECT CLASS COORDINATOR</h3>
	name:
	<select name="classcord">
	
					<?php
					 $strsql="SELECT * FROM $uname WHERE accttype='teacher'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
		
		$ctuname=$row['teachuname'];

?>
								   
				<option  value="<?php echo $ctuname; ?>"><?php echo $name  ?></option>
				<?php } ?>			
				</select>
				
				Class:
	<select name="nclasscord">
	
					<?php
					 $strsql="SELECT * FROM $uname WHERE accttype='class'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$cname=$row['name'];
		
	//	$tuname=$row['teachuname'];

?>
								   
				<option  value="<?php echo $cname; ?>"><?php echo $cname  ?></option>
				<?php } ?>			
				</select>
				<button>Assign </button>
</form>
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
<?php } ?>
</html>
