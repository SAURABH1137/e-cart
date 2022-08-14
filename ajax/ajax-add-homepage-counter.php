<?php
session_start();
if(isset($_SESSION['username'])){
    $u = $_SESSION['username'];
    $db = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
        foreach($db->query("SELECT COUNT(*) FROM cart WHERE username='{$u}'") as $row) {
            $a = $row['COUNT(*)'];
        }
        foreach($db->query("SELECT COUNT(*) FROM product") as $row) {
            $b = $row['COUNT(*)'];
        }
        foreach($db->query("SELECT COUNT(*) FROM buy WHERE username='{$u}'") as $row) {
            $c = $row['COUNT(*)'];
        }
        $qry = "SELECT SUM(price) AS count FROM buy WHERE username='{$u}' ";
        $res = $db->query($qry);
        $d = 0;
        $rec = $row = $res->fetch_assoc();
        $d = $rec['count'];
        
        $qry1 = "SELECT SUM(p_price) AS count FROM cart WHERE username='{$u}' ";
        $result = $db->query($qry1);
        $e = 0;
        $record = $row = $result->fetch_assoc();
        $e = $record['count'];

        echo "$a : $b : $c : $d : $e";
}
?>