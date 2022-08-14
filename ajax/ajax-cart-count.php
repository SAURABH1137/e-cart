<?php
session_start();
if(isset($_SESSION['username'])){
    $u = $_SESSION['username'];
    $dbh = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
        foreach($dbh->query("SELECT COUNT(*) FROM cart WHERE username='{$u}'") as $row) {
            echo  $row['COUNT(*)'];
        }
}
?>