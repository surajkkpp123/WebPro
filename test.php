<?php

mysql_connect("localhost","root","");
$con=mysql_select_db("netcamp");
if($con>0)
{
	echo succes;
}
else
{
	echo failed;
}

?>