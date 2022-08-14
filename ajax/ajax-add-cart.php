<?php
session_start();
$u = $_SESSION['username'];
$c_puid = $_POST['c_puid'];
$c_pnocount =$_POST['c_pnocount'];
$cart_price = $_POST['cart_price']*$c_pnocount;
$conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
$sql = "INSERT INTO cart VALUES (DEFAULT,'".$u."','".$c_puid."','.$c_pnocount.','.$cart_price.')";
mysqli_query($conn,$sql);
?>