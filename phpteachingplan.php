<!DOctYPE HTML>
<head>
<title>Teaching Plan</title>
<style>
form{
	text-align: center;
	}
input{width:250px;
	height:40px;
	font-size:30px;
	align:left;}
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>	
<script>
 function expanddiv(){
	var x=0;
	x= document.getElementById("ReqLectno");
	var tspan = document.getElementById("topicspan");
	tspan.innerHtml=" "
	for(var i=1;i<=x.value;i++){
	var element=document.createElement("input");
	
	element.setAttribute("type","textarea");
	element.setAttribute("value","Enter topic of chapter");
	element.setAttribute("name","topic");
	tspan.appendChild(element);
	}
	}
</script>
</head>

<body>


<form action="ptp.php" method="post">
echo '<div id="maindiv">';
echo '<label>facultyid :</label><input type="text" name="facultyid"><br><br>';
echo '<label>subjectcode :</label><input type="text" name="subjectcode"><br><br>';
echo '<label>chapno :</label><input type="text" name="chapno"><br><br>';
echo 'label>chapname :</label><input type="text" name="chapname"><br><br>';
echo '<label>ReqLectno :</label><input type="text" name="ReqLectno" id="ReqLectno" onkeyup="expanddiv()" refresh="true" ><br><br>';
echo '<br><br><span id="topicspan">';



echo '</span>';
echo '<input type="submit" name="submit" value="CreateRecord" >';
echo '</div>';
echo '</form>';
?>
</body>
</html>