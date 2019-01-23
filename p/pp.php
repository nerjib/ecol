<!DOCTYPE html>
<html lang="en">
<script type="text/javascript">
	/*this function received input when the login button is click
	to determine the questionnair form to display*/
    function tcher(){	
	document.getElementById("classform").style.display="none";
	document.getElementById("tcherform").style.display="";
	}
	
	function classes(){
	document.getElementById("tcherform").style.display="none";
	document.getElementById("classform").style.display="";
	}
</script>






<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<?php 
$db=mysqli_connect('localhost','root','','ecole') or die(mysqli_error());

$h= dirname($_SERVER['PHP_SELF']);

echo "ecol.com/". trim($h,"/ecole/");
$k=trim($h,"/ecole/");

	
 $strsql="SELECT * FROM users WHERE uname='$k'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$counter=0;
while($row=mysqli_fetch_array($rs)){
	$name=$row['schname'];
		$address=$row['address'];
		$contact=$row['phone_no'];
		$motto=$row['lname'];
		$mission=$row['oname'];
		$vission=$row['fname'];
		$schname=$row['schname'];
		$email=$row['mail'];


$counter=$counter +1;



$strsql="SELECT * FROM usersch WHERE schuser='$k'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$studcounter=0;
while($row=mysqli_fetch_array($rs)){
	
$studcounter=$studcounter +1;
}

$strsql="SELECT * FROM $k WHERE accttype='class'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$clacounter=0;
while($row=mysqli_fetch_array($rs)){
	
$clacounter=$clacounter +1;
}


$strsql="SELECT * FROM users WHERE schuname='$k' && accttype='teacher'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$teacounter=0;
while($row=mysqli_fetch_array($rs)){
	
$teacounter=$teacounter +1;
}
?>




  <title> <?php echo $schname ?></title>
	
	
	

    <!-- Bootstrap Core CSS -->
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                                                  <a href="index.php"><img src="p/i/home.png"></a>
                    </ul>
					
                </div>
				
                <!-- /.sidebar-collapse -->
            </div>
		<div  style="color:red; float:left">	<pre >Mission</pre><?php echo $mission ?></div>
		<div style="color:red; float:right"><pre>Vision</pre><?php echo $vission ?></div>
<div style="color:red; float:center"><h1 >
<div align="center" >
<?php echo $schname ?>
</h1>

    <div id="wrapper" align="center">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		 <div class="navbar-header" >
		     <img src="p\i\reg.png" width="100">
                <div style="italics">
				<?php echo $motto ?>
				
				</div>
				</div>
				</div>
				</div>
               </div >
		
		
			</div>
            </div>
			
            </div>
			<div>
			<div>
				<p>
				<table style="background-color:gren; float:left"><tr><td width="300px" border="4">
				
				
				<pre>No of Student</pre></td><td>
				<?php echo $studcounter ?></td></tr><td>
				<pre>No of Classes</pre></td><td>
				<?php echo $clacounter ?> <button onclick="classes();" > View</button></td></tr><td >
				<pre>No Of Teachers</pre></td><td>
				<?php echo $teacounter ?> <button onclick="tcher();" > View</button></td></tr><td>
				<pre>Awards</pre></td><td>
				<?php echo "##" ?> <a href=#><button onclick="info();" > View</button></a></td></tr><td>
				<pre>Address</pre></td><td>
				<?php echo $address ?></td></tr><td>
				<pre>Phone No</pre></td><td>
				<?php echo $contact ?></td></tr><td>
				<pre>Email</pre></td><td>
				<?php echo $email ?></td></tr></table>
				
				</p>
				</div>
				<div>

				<br>
</div>
				<div id="classform" style="float:right; display:none" >
				
				
				<h1>CLASSES</h1>
				
				<table ><tr><td width="300px" >
				<tr><td width="300px"><pre>Class</pre></td><td width="100px">No of student</td></tr>	</table>		
			<?php
			// show classes under school with no of student in ech class
				$strsql="SELECT * FROM $k WHERE accttype='class'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
while($row=mysqli_fetch_array($rs)){
	$name=$row['name'];
	//$title=$row['title'];
	$totl=$row['total'];
	
	

				?>
		<table>		<tr><td width="300px"><pre><?php echo $name ?></pre></td><td width="100px">
<?php echo $totl ?></td></tr></table><?php } ?>

</div> <?php
				
		
 } ?>

<div  style=" float:right; display:none" id="tcherform">
<h1>TEACHERS</h1>
<table >
				<tr><td width="300px"><pre>Name</pre></td><td width="100px">Qualification</td><td></tr>
				<?php
				// name and qualification of teachers
				$strsql="SELECT * FROM users WHERE schuname='$k' && accttype='teacher'"or die("mysqli_error()");
$rs=mysqli_query($db,$strsql);
$clacounter=0;
while($row=mysqli_fetch_array($rs)){
	$name=$row['lname'];
	$qual=$row['qualification'];

				?>
				<tr><td width="300px"><pre><?php echo $name ?></pre></td><td width="100px"> <?php echo $qual ?></td>
</tr><td><?php } ?>
			</table> 
				</div>
				</div>
				
	<div>
	<br>
	<div   style="position:relative; top:100px; width:150px; height:100px; " >
<img src="../p/i/home.png" width="100"><br>
</div>
<div  style="position:relative; left:300px; top:100px; width:100px; height:50px; " >
<img src="../p/i/cat.png" width="100">
</div>
<div  style="position:relative; left:600px; top:100px; width:100px; height:100px; " >
<img src="../p/i/reg.png" width="100">
</div>
	</div>				

                                        </div>	

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
