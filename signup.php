<!DOCTYPE html>
<html>
<head>
	<style>
body {
    background-color: aqua;
}
.div{
	float: right;
}
</style>
	<title>User signup</title>
</head>
 <body >
      <img src="head2.png">

  <div width="100%" class="div">
    <a href="main_page_netcamp.php">
    <button >Home</button>
    </a>
    <button >Login</button>
    <button >Signup</button>
    <button>About us</button>
    <button>Admin</button>
  </div> <br>
   <marquee width="100%" font-size="30" behavior="scroll" bgcolor="#7EF547">  
      Mnnit Allahabad Winter  Training of Networking,Webdevelopment And Andoid with core java... 
     </marquee>   <br>
     <div align="center">
      <h1>Signup here</h1>

     <form method="POST" action="signup2.php">
       Enter your name <br>
       <input type="text" name="a" size="30"><br>
       Enter Email id <br>
       <input type="email" name="b" size="30"><br>
       
       Date of Birth<br><input type="date" name="dob"><br>

       Gender: <input type="radio" name="gender" value="male" checked>Male
        <input type="radio" name="gender" value="female"> Female<br>

       Enter password   <br>
       <input type="password" name="c" size="30"><br>
       Phone number<br>
       <input type="number" name="d" size="30"><br><br>
       <input type="submit" value="submit"><input type="reset" value="reset"><br>
     </form> 
     </div>
</body>
</html>