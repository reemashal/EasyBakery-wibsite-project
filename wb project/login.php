<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title> Login </title>  
	  <link rel = "stylesheet" type = "text/css" 
         href = "CSSes.css">
   </head>
   <div> 
	<img id="logoEB" src="logoHP.jpg" alt="logo" /> </div>  
    <div>
  <header>   
  <div id="header1">
<ul>
         <li><a href="adminlogin.php" >login as admin</a></li>
  </header>
   <body>    		   	<div>
   	<br>  	<br>  	<br>
   	  	  	<center>
		<div  lang="ar" id="login_div">
	   <form id="form"  method = "POST" action = "Login.php">
	   <h2 style="color:black;">Login user</h2>				
       <p><input  class="input_login"  id="username" name="username" type="text"  placeholder="Username" required></p> 
        <P><input  class="input_login" id="password" type="password" name="password" placeholder="Password" required></P>
              
        <P ><input id="button" name="Login"  type="submit" value="Login"></P>
         <P class="lable_form" ><label></label></P>		 
	   </form>
            <p>Dont have an account?&nbsp; &nbsp;<a href="register.php">Register</a></p>
                
				</div>   	  	</center> 	<br>  	<br>  	<br>  
       </div></body>
<br><br><br><br><br><br><br><br><br><br><br><br>
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
if(isset($_POST["Login"])){
 session_start();
$_SESSION['user']= "null";
$username = $_POST['username'];
$password = $_POST['password'];

$con=mysqli_connect("localhost","root","","easybakery");
$result= mysqli_query($con,"SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'")
Or die("failed  conncted to database".mysql_error());
$row=mysqli_fetch_assoc($result); 

if ($row==0)
{
echo '<script language="javascript">';
echo ' alert("have you been Register?"); ';
echo '</script>';
} 
else 
{
 $_SESSION['user'] = $row['username'];
  $_SESSION['user'] =$username;

      header("location:homePage.php"); 
}}
?>
