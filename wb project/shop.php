
  <?php 
  session_start();
  $conn=mysqli_connect("localhost","root","","easybakery");
  ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title> Shop </title>
	  <link rel = "stylesheet" type = "text/css" 
         href = "CSSes.css">
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
         <li><a href="logout.php" >Log out</a> </li> 
     </ul>
    <a href="cart.php"><img src="cart.jpg" alt="cart"style="width:31px; height:25px; float:left; padding-left:10px; "  ></a>	 
    </div><br><br>
  </header>
  <body>
  <br><br>
	    <?php
      $select_products = mysqli_query($conn, "SELECT * FROM `product`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
			echo "<br><br><br><br>";
      ?>
	  <div id="shop">
	   <table width="80%">
    <tr>
	   <td><form action="shop.php" method="GET">
	  <p style="Font-size:22pt; color:gray; "> <?php echo $fetch_product['name']; ?> </p>
	  <p style="Font-size:17pt; color:black; "> <?php echo $fetch_product['price']; ?> SR</p>
	  <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="prodect image" id="picSh0p"> 
 <label> <p style="Font-size:12pt; color: dimgray; "> <?php echo $fetch_product['description']; ?> </p>
 
 <input type="hidden" name="img" value="<?php echo $fetch_product['image']; ?>">
<input type="hidden" name="name" value="<?php echo $fetch_product['name']; ?>">
<input type="hidden" name="Price" value="<?php echo $fetch_product['price']; ?>">

<button type="submit" name="submit" id="button"  style="margin-left:10pt;" >add to cart</button>	
    </label> </p> </form>  
   </td>
    </tr>
    </table>
	 <?php     };    };  ?>
   </div>
   <br><br>
  </body> <br><br><br><br>
 <footer>
       <br><br> <br><br> <br><br>     
                    <div id="footer" >
					<br>
					 <p><strong>From the heart of out kithchens to your hands, enjoy our paistries which made with alot of love (; <br> <br> Easy Bakary Team </strong> </p>	 
					 <p> Contact us in our social media pages </p>
					 <div> 
		<a href="https://twitter.com/explore"><img src="twiter.jpg" alt="twitter" style="width:31px;height:31px; float:left;  padding-left:15px;"></a>
				</div> <div>				
				<a href="https://www.instagram.com/"><img src="insta.jpg" alt="instagram" style="width:30px;height:30px; float:left;  padding-left:15px;"></a>	
				</div>	<br>
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
$item_img = $_GET['img'];
$item_name = $_GET['name'];
$price =     $_GET['Price'];
$Quantity = 1;
$conn=mysqli_connect("localhost","root","","easybakery");
mysqli_query($conn,"INSERT INTO `cart`(`username`, `item_img`, `item_name`, `Quantity`, `price`) VALUES ('$username','$item_img','$item_name ','$Quantity','$price')")
Or die("failed  conncted to database".mysql_error());

 ?>