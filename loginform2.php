<?php
$x=$_POST['a'];
$y=$_POST['b'];
if($x==""||$y=="")
{
	echo "fill all entity";
}
else
{
	mysql_connect("localhost","root","");
    mysql_select_db("netcamp");
$query="SELECT * FROM data WHERE email='$x' AND password='$y'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count!=0)
{
echo"login successful";
header("location:registration.php");
}
else
{ 
//redirect to signup page.
	echo "login failled signup first";
header("location:signup.php");
}
}
?>