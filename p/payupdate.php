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
	
		
	
	
</script>


<?php 
session_start();
 
if (isset($_SESSION['class'])){
	
$mclass=$_SESSION['class'];
}
if (isset($_SESSION['uname'])){
$uname=$_SESSION['uname'];
}
if (isset($_SESSION['accttype'])){
$accttype=$_SESSION['accttype'] ;

if ($accttype=="sch"){

  echo $stud=$_GET['testa'];
   						   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $uname WHERE accttype='payment'&& class='$mclass'"or die("mysqli_error($db)");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
	echo $name;

}
   
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Subject</title>

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
		<button onclick="hider2();">Add Subject</button><button onclick="hider1();">Assign Teachers</button>
		
 <table border="bold" >
									   <tr><td width="150px" align="center">S/No</td><td width="300px" align="center">Subjects</td><td align="center" width="500px">Classes</td><td width="100px" align="center">Teachers</td></tr></table>
				<?php
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT DISTINCT name FROM $uname WHERE accttype='subject'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$counter=0;
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
		//$class=$row['class'];
		//$cordinator=$row['teachuname'];
				//$title=$row['title'];
				$counter ++;
?>
                
		   <div class="timeline-heading">
									   
		<form action="insertpurchseda.php" method="POST">		<table>
									   <tr><td width="150px" align="center"><?php echo $counter ?></td><td width="300px" align="center"><?php echo $name ?></td> <td align="center" width="500px">
				<?php					   $strsql1="SELECT * FROM $uname WHERE name='$name' "or die("mysqli_error()");
$rs1=mysqli_query($db,$strsql1);
//$counter=0;
while($row1=mysqli_fetch_array($rs1)){
	//$name=$row['name'];
		$class=$row1['class'];
		//$cordinator=$row['teachuname'];
				//$title=$row['title'];
			//	$counter ++;
?>
<?php echo $class .", "; } ?></td><td>
<?php
 $strsql1="SELECT DISTINCT teachuname FROM $uname WHERE name='$name' "or die("mysqli_error()");
$rs1=mysqli_query($db,$strsql1);
//$counter=0;
while($row1=mysqli_fetch_array($rs1)){
	//$name=$row['name'];
		$cteach=$row1['teachuname'];
		echo "$cteach," ." ";
}?>
</td></tr></table>
</button></form>
									   
<?php  } ?>



		
            <div class="col-md-4 col-md-offset-4" id="subform" style="display:none">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    

					<h3 class="panel-title">Add Subject </h3>
                    </div>
                    <div class="panel-body">
					
                        <form role="form" action="insertsub.php" method="POST">
                            <fieldset>
							<div class="form-group">
                                    <input class="form-control" placeholder="Subject Name" name="subject" type="Text" autofocus required>
                                </div>
                             								
								<div class="form-group">
                                   <h5>	Class</h5></td><td>
			<?php			


								   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT DISTINCT class FROM $uname WHERE accttype='class'"or die("mysqli_error($db)");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$class=$row['class'];
	//	$title=$row['title'];
		



?>
								   <input type="checkbox" name="subclass[]" Value="<?php echo $class ?>"><?php echo $class ?></br>
				
				<?php } ?>			
				

                                </div>
								
								
                                
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Add Subject"  >
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
                    

					<h3 class="panel-title">Assign Teacher </h3>
                    </div>
                    <div class="panel-body">
					
                        <form role="form" action="assigntea.php" method="POST">
                            <fieldset>
														
								
								                            								
	<div class="form-group">
                                   <h3>	SUBJECT</h3></td><td><select id="acttype" name="tsub"  >
			<?php			


								   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT DISTINCT name FROM $uname WHERE accttype='subject'"or die("mysqli_error($db)");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
	//	$title=$row['title'];
		?>
								   
				<option  value="<?php echo $name ; ?>"><?php echo $name  ?></option>
				<?php } ?>			
				</select>

                                </div> 
								
								
                             								
	<div class="form-group">
                                   <h3>	CLASS</h3></td><td><select id="acttype" name="tclass"  >
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
                                   <h3>	TEACHER</h3></td><td><select id="acttype" name="tteacher"  >
			<?php			


								   $db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());
 $strsql="SELECT * FROM $uname WHERE accttype='teacher'"or die("mysqli_error($db)");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
	$tuname=$row['teachuname'];
	//	$title=$row['title'];
		?>
								   
				<option  value="<?php echo $tuname ; ?>"><?php echo $name  ?></option>
				<?php } ?>			
				</select>

                                </div> 

								
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" value="Assign Teacher";" >
									<div class="col-xs-3">                                    
                                </div>
								
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>
    </div>

	<?php 
	}
	}?>

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
