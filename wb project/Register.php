<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title> register </title>
	  <link rel = "stylesheet" type = "text/css"  href = "CSSes.css">	
   </head>
   <div> 
	<img id="logoEB" src="logoHP.jpg" alt="logo" /> </div>    
    <div>
  <header>
    
  <div id="header1">  
<ul>     
      </ul>
      </div>    
    </div>
  </header>  
   <body> 
   <br><br>
	  	<div id="login-div"> 		   	
   	<br>  	
   	  	  	<center>
		<div  lang="ar">
	   <form id="form"  method = "POST" action = "Register.php">

	   <h2 style="color:black;">Register</h2>
       <p  id="rg">username : <br> <input  class="input_login"  id="username" name="username" type="text"  placeholder="Username" required></p> 
        <P id="rg">password : <br><input  class="input_login" id="password" type="password" name="password" placeholder="8 or more degits" required></P>
		  <p id="rg">E-mail adress : <br><input  class="input_login"  id="Email" name="Email" type="e-mail"  placeholder="example@ex.com" required></p> 
        <P id="rg">phone number : <br><input  class="input_login" id="PH" type="PH" name="phone number" placeholder="000-0000-000" required></P>
		    <P id="rg">location : <br><input  class="input_login" id="PH" type="PH" name="location" placeholder="location" required></P>
			
              <br>
        <P ><input id="button" name="Register"  type="submit" value="Register"></P>
		 <p>Do you have an account?&nbsp; &nbsp;<a href="login.php">login</a></p>
         <P class="lable_form" ><label></label></P>		 
	   </form>            
				</div>   	  	</center> </div>	<br>  	<br>  	<br>  
       </body>
<br><br><br><br>
 <footer>
               <div id="footer" >
					<br>
					 <p><strong>From the heart of out kithchens to your hands, enjoy our paistries which made with alot of love (; <br> <br> Easy Bakary Team </strong> </p>
					 
					 <p> Contact us in our socail media pages </p>
					 <div> 
				<a href="https://twitter.com/explore"><img src="twiter.jpg" alt="HTML tutorial" style="width:31px;height:31px; float:left;  padding-left:15px;"></a>
				</div> <div>
					
				<a href="https://www.instagram.com/"><img src="insta.jpg" alt="HTML tutorial" style="width:30px;height:30px; float:left;  padding-left:15px;"></a>
				
					</div>
					<br>
					  <p> Contact Info </p>
					  <p> Email at : 
			  <a href="mailto:easybakary@gmail.com">   EasyBakary@gmail.com</a></p>
			  <p> phone no. <br> +996 50 9999 666 <p>					
					</div>     
</footer>
	</html>
	
<?php 
if (isset($_POST['Register'])){
$username = $_POST['username'];
$password = $_POST['password'];
$phone_num = $_POST['phone_num'];
$email = $_POST['email'];
$location = $_POST['location'];

$con=mysqli_connect("localhost","root","","easybakery");
  $sql = mysqli_query($con,"INSERT INTO `users`(`username`, `password`, `phone_num`, `email`, `location`) VALUES ('$username','$password','$phone_num','$email','$location')");

echo '"Thanks, you have been registered successfully';
header('location:login.php');
}
?>