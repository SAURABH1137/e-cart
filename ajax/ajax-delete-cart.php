<?php
session_start();
if(isset($_SESSION['username'])){
    $del = $_POST['delete'];
    $conn = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
    $sql = "DELETE FROM cart WHERE ID ='{$del}'";
    $result = mysqli_query($conn,$sql) or die("SQL Query error...!");
    mysqli_close($conn);
}
?>