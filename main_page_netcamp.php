<!DOCTYPE html>
<html>
<head>
    
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" >

	<style>
body{
    background-image: url("net.jpg");
}
.amresh{
	float:right;
  color:red;
}

</style>
	<title>Summer Training 2018 with Networking and ethical hacking</title>
</head>
 <body >
      <img src="head2.png">

  <div width="100%" class="amresh">
  	<a href="main_page_netcamp.php">
    <button >Home</button>
    </a>
  	<a href="loginform.php">
    <button >Login</button>
    </a>
  	<a href="www.facebook.com">
    <button >Signup</button>
    </a>
  	<a href="about.php">
  	<button>About us</button>
    </a>
    <a href="admin.php">
  	<button>Admin</button>
    </a>
  </div> <br>
   <marquee width="100%" font-size="30" behavior="scroll" bgcolor="#7EF547">  
      Mnnit Allahabad Winter  Training of Networking,Webdevelopment And Andoid with core java... 
     </marquee>  

   
   <div class="w3-content w3-display-container" align="center">
  <img class="mySlides" src="a1.jpg" style="width:60%">
  <img class="mySlides" src="a2.jpg" style="width:60%" >
  <img class="mySlides" src="a3.jpg" style="width:60%">
  <img class="mySlides" src="a4.jpg" style="width:60%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
  </div>

   	
   	<script >
   		var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}
   		function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
   </script>
</body>
</html>