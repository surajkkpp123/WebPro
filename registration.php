<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
 <body bgcolor="pink">
      
     <div align="center">
      <h1>Register here for join the winter course at Mnnit Allahabad</h1>

     <form method="POST" action="Registration2.php">
     	<h1>Personal details</h1><br>
        Full name: <br>
       <input type="text" name="a" size="30"><br>
        Father's name:<br>
       <input type="text" name="b" size="30"><br>
       Date of Birth:<br>
       <input type="date" name="dob"><br>
       Gender: <input type="radio" name="gender" value="male" checked>Male
        <input type="radio" name="gender" value="female"> Female<br>
       Address*<textarea rows="4" cols="50" name="ad"></textarea><br>
       <h1>College Details</h1><br>
        College name:<br>
        <input type="text" name="cn"><br>
        Branch:<br>
        <select name="br"><option>Branch</option><option>CSE</option><option>IT
        </option><option>ECE</option></select><br>
        Semester:<br>
        <select name="sem"><option>1st</option><option>2nd</option><option>3rd</option><option>4th</option><option>5th</option><option>6th</option><option>7th</option><option>8th</option></select><br><br>       
       <input type="submit" value="Register" >
       <input type="reset" value="Reset" <br><br>
      
     </form> 
     </div>
</body>
</html>