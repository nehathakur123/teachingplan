<html>

<head>

//css

<style>

table

{

border-style:solid;

border-width:2px;

border-color:pink;
align:center;

}
div{
	text-align:center;
}

</style>

</head>

<body bgcolor="#EEFDEF">

<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="tp";
$db=mysqli_connect($host,$dbusername,$dbpassword,$dbname);

if (!$db)

  {

  die('Could not connect: ' . mysql_error());

  }

 

//mysql_select_db("tp", $db);

 

$result = "SELECT * FROM tplan";


$eq_sql=mysqli_query($db,$result) or die(mysqli_error($db)) ;
echo "<div id='div1'>";
 echo "<h1>Datta Meghe College of Engineering</h1>";
 echo "<h2>Department of Information Technology</h2>";
 echo "<h4>FacultyId:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Suject:</h4>";
 echo "<h4>Div:</h4>";
 echo "</div>";
echo "<table border='1'>

 

<tr>

<th>FacultyId</th>

<th>SubjectCode</th>

<th>ChapterNo</th>

<th>ChapterName</th>

<th>RequiredNoofLectures</th>

<th>Topics</th>

</tr>";

 

while($row = mysqli_fetch_array($eq_sql))

  {

  echo "<tr>";

  echo "<td>" . $row['facultyid'] . "</td>";

  echo "<td>" . $row['subjectcode'] . "</td>";

  echo "<td>" . $row['chapno'] . "</td>";

  echo "<td>" . $row['chapname'] . "</td>";
  
  echo "<td>" . $row['ReqLectno'] . "</td>";

  echo "<td>" . $row['topic'] . "</td>";

  

  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($db);

?>

</body>

</html>