 <?php  session_start(); ?>
 <!DOCTYPE html>
<html>
   <head>
      <meta charset = "utf-8">
      <title>Home page</title>     
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
			 <li><a href="FAQ.html" >FAQ</a></li>           
         <li><a href="logout.php" >Log out</a></li>		    
      </ul>
      </div>
     <a href="cart.php"><img src="cart.jpg" alt="cart"style="width:31px; height:25px; float:left; padding-left:10px; "  ></a>
    </div>
  </header> 
  <body>
  <?php
   echo " <br><h3> 
   <center> welcome ".$_SESSION['user']. " to our bakery !</center> </h3> " ;
   ?> 
<div class="plate">
<br>
<h2> Well.. you just Found the best Paistries in Town </h2>
  <div class="Slides">   
    <img src="almond.jpg" alt="slide img" >
  </div>
  <div class="Slides">  
    <img src="moreCrwason.jpg" alt="slide img">
  </div>
  <div class="Slides">
    <img src="morecupcake2.jpg" alt="slide img">
  </div>
  <div class="Slides">
    <img src="coockies.jpg" alt="slide img" >
  </div>	
  <div class="Slides">
    <img src="morecookies.jpg" alt="slide img" >
  </div>
  <a class="befor" onclick="nextSlide(-1)"> < </a>
  <a class="next" onclick="nextSlide(1)"> > </a>
    <div class="column">
      <img class="demo cursor" src="almond.jpg"  alt="slide img" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="moreCrwason.jpg" alt="slide img"style="width:100%" onclick="currentSlide(2)" >
    </div>
 <div class="column">
      <img class="demo cursor" src="morecupcake2.jpg"  alt="slide img" style="width:100%" onclick="currentSlide(5)" >
    </div> 
 <div class="column">
      <img class="demo cursor" src="coockies.jpg"  alt="slide img" style="width:100%" onclick="currentSlide(5)" >
    </div> 
 <div class="column">
      <img class="demo cursor" src="morecookies.jpg"  alt="slide img" style="width:100%" onclick="currentSlide(5)">
    </div> 	
  </div>
</div>
<h1>_________________________________________________________________</h1>
<br>
<div class="plate2">
<br> 
<h2> We Cake up Whatever in your Imagination </h2>
<br>
  <div class="Slides2">
    <img src="CSM1.jpg"  alt="slide img" >
  </div>
  <div class="Slides2">
    <img src="CSM3.jpg" alt="slide img">
  </div>
  <div class="Slides2">
    <img src="CSM4.jpg" alt="slide img">
  </div>
  <div class="Slides2"> 
    <img src="CSM5.jpg" alt="slide img" >
  </div>
  <div class="Slides2">
    <img src="CSM6.jpg" alt="slide img" >
  </div>
  <a class="befor2" onclick="nextSlide(-1)"> < </a>
  <a class="next2" onclick="nextSlide(1)">  </a>
    <div class="column2">
      <img class="demo cursor" src="CSM1.jpg"  alt="slide img" style="width:100%" onclick="currentSlide(1)" >
    </div>
    <div class="column2">
      <img class="demo cursor" src="CSM3.jpg" alt="slide img"style="width:100%" onclick="currentSlide(2)" >
    </div>
 <div class="column2">
      <img class="demo cursor" src="CSM4.jpg"  alt="slide img"  style="width:100%" onclick="currentSlide(5)" >
    </div> 
 <div class="column2">
      <img class="demo cursor" src="CSM5.jpg"  alt="slide img" style="width:100%" onclick="currentSlide(5)" >
    </div> 
 <div class="column2">
      <img class="demo cursor" src="CSM6.jpg" alt="slide img" style="width:100%" onclick="currentSlide(5)">
    </div> 	
  </div>
</div>
<script>
let IndexSL = 1;
showSlides(IndexSL);

function nextSlide(S) {
  showSlides(IndexSL += S);
}

function currentSlide(S) {
  showSlides(IndexSL = S);
}

function showSlides(S) {
  let i;
  let slides = document.getElementsByClassName("Slides");
   let slides2 = document.getElementsByClassName("Slides2");
  
 
  if (S > slides.length) {IndexSL = 1}
  if (S < 1) {IndexSL = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
 
  slides[IndexSL-1].style.display = "block";
  
   if (S > slides2.length) {IndexSL = 1}
  if (S < 1) {IndexSL = slides2.length}
  for (i = 0; i < slides2.length; i++) {
	slides2[i].style.display = "none";
  }
    slides2[IndexSL-1].style.display = "block";
}
</script>
  </body>
 <footer>
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
	