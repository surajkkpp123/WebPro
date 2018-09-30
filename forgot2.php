<?php
$x=$_POST['aa'];
$y=$_POST['bb'];
$z=$_POST['cc'];

if($x==""||$y==""||$z=="")
{
echo"fill all";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("netcamp");

$query="SELECT * FROM data WHERE email='$x'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count==0)
{
echo"Email mismach";
}
elseif ($y!=$z) 
{
	echo "Enter same password";
}
else
{
$q1="UPDATE data set password='$z' WHERE email='$x'";
mysql_query($q1);
echo "updated" ;
}
}
?> 