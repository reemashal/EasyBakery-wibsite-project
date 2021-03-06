<?php
$conn = mysqli_connect('localhost','root','','easybakery');
if(isset($_POST['add_product'])){
	
   $product_name = $_POST['product_name'];
   $product_description = $_POST['product_description'];
   $product_price = $_POST['product_price'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;
   
   if(empty($product_name) || empty($product_price) || empty($product_image) || empty($product_description)){
      $message[] = 'please make sure you fill out all';
   }else{
      $insert = "INSERT INTO product(name, description, price, image) VALUES('$product_name', '$product_description', '$product_price','$product_image')";
      $upload = mysqli_query($conn,$insert);
      if($upload){
         move_uploaded_file($product_image_tmp_name, $product_image_folder);
         $message[] = 'new product added successfully';
      }else{
         $message[] = 'could not add the product';
      }
   }
};
if(isset($_GET['delete'])){
   $id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM product WHERE id = $id");
   header('location:admin_page.php');
};
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>admin page</title>
<link rel="stylesheet" type="text/css" href="MDstyle.css">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<span>'.$message.'</span>'; }
}
?>
<div class="holder">
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
	  <div class="c">
         <h3>add a new product</h3>
         <p><input type="text" placeholder="enter product name" name="product_name" class="box"></p>
		 <p><input type="text" placeholder="enter product description" name="product_description" class="box"></p>
         <p><input type="number" placeholder="enter product price" name="product_price" class="box"></p>
         <p><input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box"></p>
         <p><input type="submit" class="btn" name="add_product" value="add product"></p>
      </form>

   </div>
   <?php
   $select = mysqli_query($conn, "SELECT * FROM product");
   ?>
   <div class="container">
      <table class="product-display-table">
         <thead>
         <tr>
            <th>product description</th>
            <th>product name</th>
            <th>product price</th>
			<th>product image </th>
            <th>action</th>
         </tr>
         </thead>
         <?php while($row = mysqli_fetch_assoc($select)){ ?>
         <tr>
            <td><?php echo $row['name']; ?></td>
			<td><?php echo $row['description']; ?></td>
            <td><?php echo $row['price']; ?>RS</td>
			<td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td>
               <a href="admin_update.php?edit=<?php echo $row['id']; ?>" class="btn"> edit </a>
               <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="btn">  delete </a>
            </td>
         </tr>
      <?php } ?>
      </table>
	  <a href="logoutAD.php" >Log out admin</a>
   </div>
</div>
</body>
</html>