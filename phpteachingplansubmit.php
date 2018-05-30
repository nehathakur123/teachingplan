

<?php
//create variable

$facultyid=filter_input(INPUT_POST,'facultyid');
$subjectcode=filter_input(INPUT_POST,'subjectcode');
$chapno=filter_input(INPUT_POST,'chapno');
$chapname=filter_input(INPUT_POST,'chapname');
$ReqLectno=filter_input(INPUT_POST,'ReqLectno');
$topic=filter_input(INPUT_POST,'topic');

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="tp";

$db=mysqli_connect($host,$dbusername,$dbpassword,$dbname);
//or die('Error of database connection');
if(!$db){
die("error");}
else
{
	echo "OK";
}

$sql="INSERT INTO tplan(facultyid,subjectcode,chapno,chapname,ReqLectno,topic)VALUES('$facultyid','$subjectcode','$chapno','$chapname','$ReqLectno','$topic')";
//echo $sql;

$eq_sql=mysqli_multi_query($db,$sql) or die(mysqli_error($db)) ;
if($eq_sql){
    echo "new record inserted";}
	else
	{echo  mysqli_error($eq_sql);}
$db->close();
?>







