<?php
session_start();
if(isset($_SESSION['username']))
    $u = $_SESSION['username'];
    $del = $_POST['pay'];
    $uid = $_POST['buid'];
    $price= $_POST['price'];
    $buy_time = date('Y-m-d h:i:s',time());
    $delivered_time = date('Y-m-d h:i:s',time()+8000);
    $c_pnocount =$_POST['c_pnocount'];
    $conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
    $sql = "INSERT INTO buy VALUES (DEFAULT,'".$u."','".$uid."','.$price.','".$buy_time."','".$delivered_time."')";
    $sql1 = "DELETE FROM cart WHERE ID ='{$del}'";
mysqli_query($conn,$sql);
mysqli_query($conn,$sql1);
?>



