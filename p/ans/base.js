 function questionnaire(){
	var q1=document.getElementById("q14");
	var q2=document.getElementById("q22");
	var q3=document.getElementById("q34");
	var q4=document.getElementById("q43");
	var score=0;
	
	if (q1.checked){
	document.getElementById("coment").innerHTML="correct";
	document.getElementById("coment").style.background="green";
	score=score + 1;
	}
	else{
	document.getElementById("coment").innerHTML="wrong";
	document.getElementById("coment").style.background="red";
		}
		
		
		if (q2.checked){
	document.getElementById("coment2").innerHTML="correct";
	document.getElementById("coment2").style.background="green";
	score=score + 1;
	}
	else{
	document.getElementById("coment2").innerHTML="wrong";
	document.getElementById("coment2").style.background="red";
		}
	
		if (q3.checked){
	document.getElementById("coment3").innerHTML="correct";
	document.getElementById("coment3").style.background="green";
	score=score + 1;
	}
	else{
	document.getElementById("coment3").innerHTML="wrong";
	document.getElementById("coment3").style.background="red";
		}
		
		if (q4.checked){
	document.getElementById("coment4").innerHTML="correct";
	document.getElementById("coment4").style.background="green";
	score=score + 1;
	
	}
	else{
	document.getElementById("coment4").innerHTML="wrong";
	document.getElementById("coment4").style.background="red";
		}
		
		var percent=(score/4)*100;
		document.getElementById("score").innerHTML=percent + "%";
		if (percent >= 50){
			document.getElementById("solution").style.display="";
					}
		else{
			document.getElementById("solution").style.display="none";
		}
	}
	
	function exercise(){
		document.getElementById("exercisediv").style.display="";
		
	}