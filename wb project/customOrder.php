 
  <?php  session_start();?>
 <!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>custom order </title>
	 <link rel = "stylesheet" type = "text/css"  href = "CSSes.css"> 	 
   </head>
   <div> 
	<img id="logoEB" src="logoHP.jpg" alt="logo" /> </div>
    <div>
  <header>
  <div id="header1">
<ul>   
        <li><a href="homePage.php" >Home</a></li>
        <li><a href="shop.php" >Shop</a></li>
		 <li><a href="customOrder.php" >custom order</a></li>      
			 <li><a href="faq.html" >FAQ</a></li>
         <li><a href="logout.php" >Log out</a> 
			 </li>
     </ul>
    <a href="cart.php"><img src="cart.jpg" alt="cart"style="width:31px; height:25px; float:left; padding-left:10px; "  ></a>	 
    </div>
	<br><br>
  </header>
  <br>
  <br>
	  <div id= "h">
     <h1> Create your own Cake ..  </h1>
	 <h2> Fill the form so we could start baking </h2>
	 <br>
	 <br>
	 <div>
 <div id="co">
	  <form action="customOrder.php" method="GET">
  <p><strong>Please select how many serving do you want:</strong></p>
  <input type="radio" id="small" name="serving" value="2-5">
  <label for="2-5">2-5</label><br>

  <input type="radio" id="middle" name="serving" value="6-8">
  <label for="6-8">6-8</label><br>

  <input type="radio" id="most" name="serving" value="9-11">
  <label for="9-11">9-11</label>
<p> ____________________________________________________________</p>
<br>
  <p><strong>Please select how many layrs do you want:</strong></p>
  
  <input type="radio" id="small" name="leyer" value="single">
  <label for="single leyer">single leyer</label><br>

  <input type="radio" id="middle" name="leyer" value="tow">
  <label for="milti leyer">tow leyres </label><br>
<p> ____________________________________________________________</p>
<br>
  <p><strong>Please select the cake flavor you want:</strong></p>
 
  <input type="radio" id="small" name="fla" value="vanilla">
  <label for="2-5">vanilla</label><br>

  <input type="radio" id="middle" name="fla" value="chocolet">
  <label for="6-8">chocolet</label><br>

  <input type="radio" id="most" name="fla" value="lemon">
  <label for="9-11">lemon</label>
<p> ____________________________________________________________</p>
<br>
  <p><strong>Please select the cake filling you want:</strong></p>
  
  <input type="radio" id="small" name="fill" value="fruit">
  <label for="2-5">fruit</label><br>

  <input type="radio" id="middle" name="fill" value="cheesecake">
  <label for="6-8">cheesecake</label><br>

  <input type="radio" id="most" name="fill" value="oreo">
  <label for="9-11">oreo</label>
<p> ____________________________________________________________</p>
<br>
  <label for="formCO"> <strong>Add Note:</strong></label>
  <br>
  <br>
<textarea id="formCO" name="co" rows="4" cols="50">
  write on cake, cake shape ...
  </textarea>
   <br><br> <br><br> <br><br>
<button type="submit" name="submit" id="button"  style="margin-left:10pt;" >submit</button>

<input type="hidden" name="name" value="custom cake">
<input type="hidden" name="Price" value= 150>
  </form>
  </div>
  </body>
   <footer>
   <br><br>    <br><br>	 <br><br> <br><br>   <br><br> <br><br>               <br><br>				                 
                    <div id="footer" >
	<br>
 <p><strong>From the heart of out kithchens to your hands, enjoy our paistries which made with alot of love (; <br> <br> Easy Bakary Team </strong> </p>				 
<p> Contact us in our social media pages </p>
 <div> 
 <a href="https://twitter.com/explore"><img src="twiter.jpg" alt="twitter" style="width:31px;height:31px; float:left;  padding-left:15px;"></a>
				</div> <div>				
				<a href="https://www.instagram.com/"><img src="insta.jpg" alt="instagram" style="width:30px;height:30px; float:left;  padding-left:15px;"></a>	
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
if(isset($_GET["submit"]))
$username = $_SESSION['user'];
$item_img = null;
$item_name = $_GET['name'];
$price =     $_GET['Price'];
$Quantity = 1;
$conn=mysqli_connect("localhost","root","","easybakery");
mysqli_query($conn,"INSERT INTO `cart`(`username`, `item_img`, `item_name`, `Quantity`, `price`) VALUES ('$username','$item_img ','$item_name ','$Quantity','$price')");

 ?>
  
  
  
  
 