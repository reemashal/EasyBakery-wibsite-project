
<?php
if(isset($_POST["Login"]))
{
 session_start();
$_SESSION['admin_name']= "null";
$username = $_POST['admin_name'];
$password = $_POST['admin_password'];

$con=mysqli_connect("localhost","root","","easybakery");
$result= mysqli_query($con,"SELECT * FROM `admintable` WHERE `admin_name`='$username' AND `admin_password`='$password'")
Or die("failed  conncted to database".mysql_error());
$row=mysqli_fetch_assoc($result); 

{
 $_SESSION['admin_name'] = $row['username'];
  $_SESSION['admin_name'] =$username;

      header("location:admin_page.php");
   
}}
