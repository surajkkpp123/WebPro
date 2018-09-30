<?php
$name=$_POST['a'];
$father=$_POST['b'];
$birth=$_POST['dob'];
$sex=$_POST['gender'];
$address=$_POST['ad'];
$college=$_POST['cn'];
$branch=$_POST['br'];
$semester=$_POST['sem'];

if($name=="" ||$father=="" ||$birth==""||$birth==""||$address==""||$college==""||$branch==""||$semester=="")
{
echo "fill all entity";
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("netcamp");

$query="SELECT * FROM record1 WHERE name='$name' AND father='$father' AND birth='$birth'";
$result=mysql_query($query);
$count=mysql_num_rows($result);

if($count==0)
{
	$id=mt_rand(100,1000);
    
	echo "Your Reg.No. is ".$id."<br>";
    
$query1="INSERT INTO record1 VALUES('$id','$name','$father','$birth','$sex')";
$query2="INSERT INTO record2 VALUES('$address','$college','$branch','$semester')";
mysql_query($query1);
mysql_query($query2);
echo"Registration successful";
}
else
{
echo"Registration not possible enter unique identity,or already registered.";
}
}
?>
