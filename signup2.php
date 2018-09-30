<?php
$name=$_POST['a'];
$email=$_POST['b'];
$birth=$_POST['dob'];
$sex=$_POST['gender'];
$pass=$_POST['c'];
$phone=$_POST['d'];

if($name=="" ||$email=="" ||$birth==""||$sex==""||$pass==""||$phone=="")
{
echo "fill all entity";
}
else
{
mysql_connect("localhost","");#in this line, there is problem
mysql_select_db("");#Here also some mistake

$query="SELECT * FROM data WHERE name='$name' AND password='$pass'";
$result=mysql_query($query);
$count=mysql_num_rows($result);

if($count==0)
{
	$x=mt_rand(100,1000);
	echo "Your Login id is ".$x."<br>";

$query1="INSERT INTO data VALUES('$x','$name','$email','$birth','$sex','$pass','$phone')";
mysql_query($query1);
echo"signup successful";
}
else
{
echo"user exists";
}
}
?>
