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
     <title>User login</title>
</head>
 <body >
      <img src="head2.png">

  <div width="100%" class="div">
     <a href="main_page_netcamp.php">
    <button >Home</button>
    </a>
     <button>Login</button>
     <button>Signup</button>
     <button>About us</button>
     <button>Admin</button>
  </div> <br>
   <marquee width="100%" font-size="30" behavior="scroll" bgcolor="#7EF547">  
      Mnnit Allahabad Winter  Training of Networking,Webdevelopment And Andoid with core java... 
     </marquee>   <br>
     <div align="center">
      <h1>Login here</h1>

     <form method="POST" action="loginform2.php">
       Registration no. or Email<br>
       <input type="text" name="a" size="30"><br>
       password  <br>
       <input type="password" name="b" size="30"><br>
       
       <input type="submit" value="login"><input type="reset" value="reset"><br>
     
     </form> 
     <a href="forgot.php">
       <button>forgot password?</button>
       </a>
     </div>
</body>
</html>
