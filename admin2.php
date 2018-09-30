<?php

$x=$_POST['a'];
$y=$_POST['b'];

if ($x=="Admin"&&$y=="netcamp")
 {
   echo"Login data"; 
   mysql_connect("localhost","root","");
   mysql_select_db("netcamp");
   $query="SELECT * FROM data ";
   $result=mysql_query($query);
   while($row=mysql_fetch_array($result))
  {
   echo"<table border='1'>";
   echo"<tr>";
   echo"<td>".$row[0]."</td>";
   echo"<td>".$row[1]."</td>";
   echo"<td>".$row[2]."</td>";
   echo"<td>".$row[3]."</td>";
   echo"<td>".$row[4]."</td>";
   echo"<td>".$row[5]."</td>";
   echo"<td>".$row[6]."</td>";
   echo "</tr>";
   echo"</table>";
  }
   echo"<br><br><br>";
   echo"Resistration data"; 

   $query1="SELECT * FROM record1";
   $result1=mysql_query($query1);
   while($row1=mysql_fetch_array($result1))
  {
   echo"<table border='1'>";
   echo"<tr>";
   echo"<td>".$row1[0]."</td>";
   echo"<td>".$row1[1]."</td>";
   echo"<td>".$row1[2]."</td>";
   echo"<td>".$row1[3]."</td>";
   echo"<td>".$row1[4]."</td>";
 
   echo "</tr>";
   echo"</table>";
   }

    echo"<br><br><br>";
   echo"Resistration data"; 

   $query1="SELECT * FROM record2";
   $result1=mysql_query($query1);
   while($row1=mysql_fetch_array($result1))
  {
   echo"<table border='1'>";
   echo"<tr>";
   echo"<td>".$row1[0]."</td>";
   echo"<td>".$row1[1]."</td>";
   echo"<td>".$row1[2]."</td>";
   echo"<td>".$row1[3]."</td>";
 
   echo "</tr>";
   echo"</table>";

    }

}
else
{
	echo"enter right password";
}
?>