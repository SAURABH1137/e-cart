<?php
    $db = mysqli_connect("localhost","root","","ecart_db")or die("Database Error..!");
        foreach($db->query("SELECT COUNT(*) FROM cart") as $row) {
            $a = $row['COUNT(*)'];
        }
        foreach($db->query("SELECT COUNT(*) FROM product") as $row) {
            $b = $row['COUNT(*)'];
        }
        foreach($db->query("SELECT COUNT(*) FROM buy") as $row) {
            $c = $row['COUNT(*)'];
        }
        $qry = "SELECT SUM(price) AS count FROM buy";
        $res = $db->query($qry);
        $d = 0;
        $rec = $row = $res->fetch_assoc();
        $d = $rec['count'];
        foreach($db->query("SELECT COUNT(*) FROM userlogin") as $row) {
            $e = $row['COUNT(*)'];
        }
        echo "$a : $b : $c : $d : $e";
?>