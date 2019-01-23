function answers()
	{
	var q1;
	q1=document.getElementById("q11");
	var q2=document.getElementById("q2").value;
	var q3=document.getElementById("q3").value;
	var q4=document.getElementById("q4").value;
	var q5=document.getElementById("q5").value;
	
	
	if (q1.checked){	
	document.getElementById("remak").innerHTML="correct";
	}
	else
		{
		document.getElementById("remak").innerHTML="wrong";
		}
	}
	
	
								
									function addp()
	{
	var say;
	say=document.getElementById("comnt");
	var say1=document.getElementById("comnt1").value
	
	if (say.checked){	
	document.getElementById("remak").innerHTML=say;
	}
	else
		{
		document.getElementById("remak").innerHTML="input not match";
		}
	}
	
	</script>


