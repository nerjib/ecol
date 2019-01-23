<?php
//session_start();
			$head=$_POST['head'];
			$content=$_POST['content'];
			//$phone_no=$_SESSION['phone_no'];



 $db=mysqli_connect('localhost','root','','ututor') or die(mysqli_error());

					
										
					$stSQL="INSERT INTO news(heading, content) VALUES('$head','$content')";
					mysqli_query($db,$stSQL) or die("Error: ".mysqli_error($db));	
		
					header("location:news.php");
					?>