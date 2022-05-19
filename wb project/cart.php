
  <?php  session_start();?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title> Login </title>
     
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
   <div>
 <h2><?php echo$_SESSION['user']. "   cart" ;?></h2>
<br><br>
<hr width="80%">
<br><br>
	<div id="cart" style="
 background-color:#EEEAEC;
 border-radius: 20px;
 padding-left:-50px;">   
		 <table id="table" style=" padding-right:10px;">
  <thead>
         <tr><th>ID</th><th> Name</th><th>Quantity</th><th>price</th><th></th><th></th></tr>
	    </thead>
		    </div>
	           <?php
		 $username =$_SESSION['user'] ; 
$connection=mysqli_connect("localhost","root","","easybakery"); 
$result=mysqli_query($connection,"SELECT `id`, `item_name`, `Quantity`, `price` FROM `cart` WHERE `username`='$username'");?>
	  <?php           
while($row=mysqli_fetch_object($result))
  {
 print ("<tr>");
 foreach($row as $value )
 print ("<td>$value</td>");
  print( " <td> <a href='cart.php?id=$row->id'> delete </a></td>");
    print ("</tr>");
  }
?>
        <tr><td colspan="4"><hr style="width: 80%"></td></tr>
          <tr><td colspan="4">Cart Total =
		  <?php 
$res=mysqli_query($connection,"SELECT SUM(`price`) FROM `cart` WHERE `username`='$username'");
while($row = mysqli_fetch_array($res))
{
	$total =$row['SUM(`price`)'];
	echo"".$total." SR";
}
?>     <div>	   
   <p>
	<div>
 	<a href="after payment.php"><img src="applepay.png" alt="HTML " style="width:51px;height:31px;  float:left;  padding-left:15px;  "></a>
	</div> <div>
<a href="after payment.php"><img src="cod.png" alt="HTML " style="width:51px;height:31px;   float:left;  padding-left:15px; "></a></p>
		  </div>
		 <br><br>
</table>
    </div>
		 </body>      
  <br><br><br><br>
 <footer>
       <br>
<br> <br><br> <br><br>     
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
 if(isset($_GET['id'])){
	 $id = $_GET['id'];
   mysqli_query($connection, "DELETE FROM cart WHERE id = $id");
   header('location:cart.php');
};
?>
  
  