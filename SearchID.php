<html>
<head>
<script>
function showHint(str)
{
	if (str.length==0)	{ 
		document.getElementById("txtHint").innerHTML="";
		return;
	}
	xmlhttp=new XMLHttpRequest();	
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200)   {
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}
	}
	xmlhttp.open("GET","SearchDB.php?q="+str,true);
	xmlhttp.send();
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<HR color=red>
<p>Suggestions: <div id="txtHint">
the result will be shown here</div></p>
<HR color=red>
</body>
</html>